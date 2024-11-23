<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CertificateController extends Controller
{
    //certificate
    public function view_certificate(){
        $data=Certificate::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.certificate.view_certificate',compact('data'));
    }

    public function add_certificate(){
        return view('admin.partials.certificate.add_certificate');
    }

    public function upload_certificate(Request $request){
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required',
        ]);

        $certificate = new Certificate;
        $certificate->name = $request->name;
        $certificate->phone = $request->phone;
        $certificate->trade_name = $request->trade_name;
        $certificate->batch_no = $request->batch_no;
        $certificate->registration_no = $request->registration_no;

        // Generate a unique certificate number
        $certificate->certificate_no = 'CERT-' . strtoupper(uniqid()) . '-' . date('Y');

        $certificate->passport_no = $request->passport_no;
        $certificate->save();

        return redirect()->route('admin.view_certificate')->with('success','Certificate Added Successfully');
        
    }

    public function certificate($id){
        $data= Certificate::findOrfail($id);
        return view('admin.partials.certificate.single_certificate',compact('data'));
    }

    public function edit_certificate($id){
        $data= Certificate::findOrfail($id);
        return view('admin.partials.certificate.edit_certificate',compact('data'));
    }

    public function update_certificate(Request $request, $id){
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required',
        ]);

        $certificate = Certificate::findOrfail($id);
        $certificate->name = $request->name;
        $certificate->phone = $request->phone;
        $certificate->trade_name = $request->trade_name;
        $certificate->batch_no = $request->batch_no;
        $certificate->registration_no = $request->registration_no;
        $certificate->passport_no = $request->passport_no;
        $certificate->save();

        return redirect()->route('admin.view_certificate')->with('success','Certificate Update Successfully');
        
    }

    public function delete_certificate($id){
        $data=Certificate::findOrFail($id);

        $data->delete();

        return redirect()-> back()->with('warning','Certificate Delete Successfully');
    }

    public function print_certificate($id){
        $data=Certificate::find($id);
        $pdf = Pdf::loadView('admin.partials.certificate.invoice', compact('data'));
        return $pdf->setPaper('a4', 'landscape')->setWarnings(false)->download('certificate.pdf');
    }
}
