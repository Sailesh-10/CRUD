<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\User;   
use App\Models\Services;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function service()
    {
        $service = Services::all(); 
        $userId = Session::get('user_id');

        $user = User::find($userId);
        return view('services.service', compact('service'), ['user' => $user]);

    }
    
    public function service_form()
    {
        $userId = Session::get('user_id');

        $user = User::find($userId);
        return view('services.add_services', ['user' => $user]);

    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $userId = Session::get('user_id');
        $user = User::find($userId);

        $service = new Services();
        if($request->hasfile('image'))
        {
            $file = $request->file('image'); 
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention; 
            $file->move('uploads/icon/', $filename);
            $service->image= $filename; 
         
        }
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        
        $service->status= $request->input('status') == true? '1':'0';
        $service->save();  
    

        return redirect()->route('admin.service')->with('success', 'Services Created succesfully.');

    }
    public function edit($id)
    {
        $service = Services::find($id);
        $userId = Session::get('user_id');

        $user = User::find($userId);

        return view('services.edit', compact('service'), ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $userId = Session::get('user_id');
        $user = User::find($userId);

        $service = Services::find($id);
        if($request->hasfile('image'))
        {
            $destination = 'uploads/icon/'.$service->image;
            if(File::exists($destination)) {  
            File::delete($destination); 
            }
            $file = $request->file('image'); 
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention; 
            $file->move('uploads/icon/', $filename);
            $service->image= $filename; 
         
        }
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        
        $service->status= $request->input('status') == true? '1':'0';
        $service->save();  
    

        return redirect()->route('admin.service')->with('success', 'Services Edited succesfully.');

    }
    public function delete($id)
    {
        $service = Services::find($id);
        $service->delete();

        return redirect()->route('admin.service')->with('success', 'Service deleted successfully');
    }
}
