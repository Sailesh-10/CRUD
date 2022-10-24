<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\User;   
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function slider()
    {
        $slider=Slider::all();
        $userId = Session::get('user_id');

        $user = User::find($userId);
        return view('front.slider', compact('slider'), ['user' => $user]);

    }
    public function slider_form()
    {
        $userId = Session::get('user_id');

        $user = User::find($userId);
        return view('front.add_slider', ['user' => $user]);

    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $userId = Session::get('user_id');
        $user = User::find($userId);

        $slider = new Slider();
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image'); 
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention; 
            $file->move('uploads/slider/', $filename);
            $slider->image= $filename; 
         
        }
        $slider->status= $request->input('status') == true? '1':'0';
        $slider->save();  
    

        return redirect()->route('admin.slider')->with('success', 'Slider Created succesfully.');

    }
    public function edit($id)
    {
        $slider = Slider::find($id);
        $userId = Session::get('user_id');

        $user = User::find($userId);

        return view('front.edit', compact('slider'), ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $userId = Session::get('user_id');
        $user = User::find($userId);

        $slider = Slider::find($id);
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $destination = 'uploads/slider/'.$slider->image;
            if(File::exists($destination)){ 
                File::delete($destination); 
            }
            $file = $request->file('image'); 
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention; 
            $file->move('uploads/slider/', $filename);
            $slider->image= $filename; 
         
        }
        $slider->status= $request->input('status') == true? '1':'0';
        $slider->save();  
    

        return redirect()->route('admin.slider')->with('success', 'Slider Updated succesfully.');

        
    }
    public function delete($id)
    {
        $slider = Slider::find($id);
        $slider->delete();

        return redirect()->route('admin.slider')->with('success', 'Slider deleted successfully');
    }
    
}
  