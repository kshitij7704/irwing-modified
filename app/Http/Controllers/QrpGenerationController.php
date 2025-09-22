<?php

namespace App\Http\Controllers;

use App\Models\QrpForm;
use App\Models\Agency;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class QrpGenerationController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agencies = Agency::all(); 
        $qrps = QrpForm::latest()->get();
        return view('qrpgen.index', compact('qrps','agencies'));
    }
    public function qrpIndex($id)
    {
        if($id == 0){

            $agencies = null; 
            $qrps = QrpForm::latest()->get();

        }else{

            $agencies = Agency::find($id); 
            $qrps = QrpForm::where('agency',$agencies->id)->get();

        }
        return view('qrpgen.indexqrp', compact('qrps','agencies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(QrpForm $QrpForm, $id)
    {
        $form = QrpForm::findOrFail($id);
        return view('qrpgen.show', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QrpForm $QrpForm, $id)
    {
        $qrp = QrpForm::findOrFail($id);

        return view('qrpgen.edit', compact('qrp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QrpForm $QrpForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QrpForm $QrpForm)
    {
        //
    }
    // Download as PDF
    public function downloadPdf($id)
    {
        $form = QrpForm::findOrFail($id);

        $pdf = Pdf::loadView('qrp.pdf', compact('form'));
        return $pdf->download('QRP_Form_'.$form->id.'.pdf');
    }
}
