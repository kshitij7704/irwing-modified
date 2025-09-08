<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function leads()
    {
        $leads = Lead::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.leads', compact('leads'));
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