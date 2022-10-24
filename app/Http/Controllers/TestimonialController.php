<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\User;   
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function testimonial()
    {
        $testimonial = Testimonial::all();
        $userId = Session::get('user_id');

        $user = User::find($userId);
        return view('testimonials.testimonial', compact('testimonial'), ['user' => $user]); 
    }
    public function testimonial_form()
    {
        $userId = Session::get('user_id');

        $user = User::find($userId);
        return view('testimonials.add_testimonial', ['user' => $user]);

    }
    public function store(Request $request)
    {
        $request->validate([
            'testimonial' => 'required',
            'name' => 'required',
        ]);
        $userId = Session::get('user_id');
        $user = User::find($userId);

        $testimonial = new Testimonial();
        if($request->hasfile('image'))
        {
            $file = $request->file('image'); 
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention; 
            $file->move('uploads/testimonial/', $filename);
            $testimonial->image= $filename; 
         
        }
        $testimonial->testimonial = $request->input('testimonial');
        $testimonial->name = $request->input('name');
        $testimonial->position = $request->input('position');
        $testimonial->company = $request->input('company');
        
        $testimonial->status= $request->input('status') == true? '1':'0';
        $testimonial->save();  
    

        return redirect()->route('admin.testimonial')->with('success', 'Testimonial Created succesfully.');

    }
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        $userId = Session::get('user_id');

        $user = User::find($userId);

        return view('testimonials.edit', compact('testimonial'), ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'testimonial' => 'required',
            'name' => 'required',
        ]);
        $userId = Session::get('user_id');
        $user = User::find($userId);
        $testimonial =Testimonial::find($id);
        $testimonial->testimonial = $request->input('testimonial');
        $testimonial->name = $request->input('name');
        $testimonial->position = $request->input('position');
        $testimonial->company = $request->input('company');
        if($request->hasfile('image'))
        {
            $destination = 'uploads/testimonial/'.$testimonial->image;
            if(File::exists($destination)){ 
                File::delete($destination); 
            }
            $file = $request->file('image'); 
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention; 
            $file->move('uploads/testimonial/', $filename);
            $testimonial->image= $filename; 
         
        }
        
        $testimonial->status= $request->input('status') == true? '1':'0';
        $testimonial->save();  
    

        return redirect()->route('admin.testimonial')->with('success', 'Testimonial Edited succesfully.');

    }
    public function delete($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();

        return redirect()->route('admin.testimonial')->with('success', 'Testimonial deleted successfully');
    }

}