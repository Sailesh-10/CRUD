<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\User;   
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function team()
    {
        $team = Team::all();
        $userId = Session::get('user_id');

        $user = User::find($userId);
        return view('teams.team', compact('team'), ['user' => $user]); 
    } 
    public function team_form()
    {
        $userId = Session::get('user_id');

        $user = User::find($userId);
        return view('teams.add_team', ['user' => $user]);

    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $userId = Session::get('user_id');
        $user = User::find($userId);

        $team = new Team();
        if($request->hasfile('image'))
        {
            $file = $request->file('image'); 
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention; 
            $file->move('uploads/team/', $filename);
            $team->image= $filename; 
         
        }
        $team->name = $request->input('name');
        $team->position = $request->input('position');
        $team->description = $request->input('description');
        
        $team->status= $request->input('status') == true? '1':'0';
        $team->save();  
    

        return redirect()->route('admin.team')->with('success', 'Team Created succesfully.');

    }
    public function edit($id)
    {
        $team = Team::find($id);
        $userId = Session::get('user_id');

        $user = User::find($userId);

        return view('teams.edit', compact('team'), ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $userId = Session::get('user_id');
        $user = User::find($userId);
        $team =Team::find($id);
        $team->name = $request->input('name');
        $team->position = $request->input('position');
        $team->company = $request->input('description');
        if($request->hasfile('image'))
        {
            $destination = 'uploads/team/'.$team->image;
            if(File::exists($destination)){ 
                File::delete($destination); 
            }
            $file = $request->file('image'); 
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention; 
            $file->move('uploads/team/', $filename);
            $team->image= $filename; 
         
        }
        
        $team->status= $request->input('status') == true? '1':'0';
        $team->save();  
    

        return redirect()->route('admin.team')->with('success', 'Team Edited succesfully.');

    }
    public function delete($id)
    {
        $team = Team::find($id);
        $team->delete();

        return redirect()->route('admin.team')->with('success', 'Team deleted successfully');
    }

}
