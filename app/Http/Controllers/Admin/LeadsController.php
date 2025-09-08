<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Lead;
use Carbon\Carbon;

class LeadsController extends Controller
{ 
    public function leads(Request $request)
    {
        $leads = Lead::orderBy('created_at', 'desc')->get();

        if ($request->ajax()) {
            return DataTables::of($leads)
                ->addIndexColumn()
                ->addColumn('name', fn($row) => $row->name)
                ->addColumn('email', fn($row) => $row->email)
                ->addColumn('company', fn($row) => $row->company ?? '—')
                ->addColumn('service', fn($row) => optional($row->service)->format('d M Y'))
                ->addColumn('actions', function ($row) {
                    $editUrl = route('admin.news.edit', $row->id);
                    $deleteUrl = route('admin.news.destroy', $row->id);

                    return '
                        <div class="d-flex align-items-center">
                            <a class="btn btn-icon me-1" href="' . $editUrl . '">
                                <i class="icon-base ti tabler-edit icon-22px"></i>
                            </a>
                            <form action="' . $deleteUrl . '" method="POST" style="display:inline;" onsubmit="return confirm(\'Are you sure?\')">
                                ' . csrf_field() . method_field('DELETE') . '
                                <button type="submit" class="btn btn-icon btn-sm btn-danger">
                                    <i class="icon-base ti ti-trash icon-22px"></i>
                                </button>
                            </form>
                        </div>';
                })
                ->rawColumns(['thumbnail_image', 'actions'])
                ->make(true);
        }
        return view('admin.leads.index', compact('leads'));
    }

    public function updateLeadStatus(Request $request, $id)
    {
        $lead = Lead::findOrFail($id);
        $lead->update(['status' => $request->status]);
        
        return response()->json([
            'success' => true,
            'message' => 'Lead status updated successfully'
        ]);
    }

    public function deleteLead($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Lead deleted successfully'
        ]);
    }
}
