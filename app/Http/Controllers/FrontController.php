<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Services;
use App\Models\Testimonial;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\User;   
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class FrontController extends Controller
{
    public function home(){ 
       
        $slider= Slider::where('status','0')->get();
        $service= Services::where('status','0')->get();
        $testimonial= Testimonial::where('status','0')->get();
        return view ('home.welcome', compact('slider', 'service', 'testimonial')); 
    }
    public function service(){ 
        $testimonial= Testimonial::where('status','0')->get();
        $service= Services::where('status','0')->get();
        return view ('front.services', compact('service', 'testimonial')); 
    }
    public function about(){ 
       
        $team= Team::where('status','0')->get();
        return view ('front.about', compact('team')); 
    }

    
}
