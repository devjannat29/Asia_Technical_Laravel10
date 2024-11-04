<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use App\Models\Job_Category;
use App\Models\Job_Circular;
use App\Models\Notice;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ServiceController extends Controller
{
    public function view_service(){
        $service = Service::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.service.view_service',compact('service'));
    }

    public function add_service(){
        return view('admin.partials.service.add_service');
    }

    public function upload_service(Request $request){
        $data=new Service;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->slug = $request->slug;
        $data->status = $request->status;
        
        $data->save();

        $notification = array(
            'message' => 'Service Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_service')->with($notification); 
    }

    public function edit_service($id){
        $service = Service::findOrfail($id);
        return view('admin.partials.service.edit_service',compact('service'));
    }

    public function update_service(Request $request,$id){
        $data=Service::findOrfail($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->slug = $request->slug;
        $data->status = $request->status;
        
        $data->save();

        $notification = array(
            'message' => 'Service Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_service')->with($notification); 
    }

    public function delete_service($id){
        $data=Service::findOrFail($id);

        $data->delete();

        $notification = array(
            'message' => 'Course Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    //Testimonials
    public function testimonials(){
        $testimonial = Testimonial::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.service.testimonials',compact('testimonial'));
    }

    public function upload_testimonials(Request $request){

        $data=new Testimonial;
        $data->name = $request->name;
        $data->department = $request->department;
        $data->short_desc = $request->short_desc;
        
        $data->save();

    
        $notification = array(
            'message' => 'Testimonial Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.testimonials')->with($notification); 
    }

    public function delete_testimonials($id){
        $data=Testimonial::findOrFail($id);

        $data->delete();

        $notification = array(
            'message' => 'testimonial Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    ///Notice
    public function notice(){
        $data=Notice::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.service.notice',compact('data'));
    }

    public function upload_notice(Request $request){
        $request->validate([
            'document' => 'required|mimes:pdf,doc,docx,jpg,jpeg',
        ]);
        $file = $request->file('document');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('upload/document'), $fileName);
        

        $doc = new Notice;
        $doc->file =$fileName;
        $doc->title =$request->title;
        $doc->save();

        $notification = array(
            'message' => 'Notice Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
    }
    //download document
    public function download(Request $request,$file){
        return response()->download(public_path('upload/document/'.$file));
    }


    public function delete_notice($id){
        $data=Notice::findOrFail($id);

        $data->delete();

        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    ///Interview
    public function interview(){
        $data=Interview::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.service.interview',compact('data'));
    }

    public function upload_interview(Request $request){
        $request->validate([
            'document' => 'required|mimes:pdf,doc,docx,jpg,jpeg',
        ]);
        $file = $request->file('document');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('upload/document'), $fileName);

        $doc = new Interview;
        $doc->file =$fileName;
        $doc->title =$request->title;
        $doc->save();

        $notification = array(
            'message' => 'Interview Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
    }


    public function delete_interview($id){
        $data=Interview::findOrFail($id);


        $data->delete();

        $notification = array(
            'message' => 'Interview Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    ///job_category
    public function job_category(){
        $data=Job_Category::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.service.job_category',compact('data'));
    }

    public function upload_job_category(Request $request){
        $data=new Job_Category;
        $data->category_title = $request->category_title;
        $data->save();

        $notification = array(
            'message' => 'category Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
    }

    public function delete_job_category($id){
        $data=Job_Category::findOrFail($id);

        $data->delete();

        $notification = array(
            'message' => 'Job Category Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    } 

    ///job_circular
    public function job_circular(){
        $category=Job_Category::all();
        $data=Job_Circular::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.service.job_circular',compact('category','data'));
    }

    public function upload_job_circular(Request $request){
        $request->validate([
            'document' => 'required|mimes:pdf,doc,docx,jpg,jpeg',
        ]);
        $file = $request->file('document');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('upload/document'), $fileName);

        $doc = new Job_Circular;
        $doc->file =$fileName;
        $doc->job_title =$request->job_title;
        $doc->category =$request->category;
        $doc->save();

        $notification = array(
            'message' => 'Notice Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
    }


    public function delete_job_circular($id){
        $data=Job_Circular::findOrFail($id);


        $data->delete();

        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    
}
