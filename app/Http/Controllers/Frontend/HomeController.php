<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function homepage()
    {
        $hero = HeroSection::first();
        $serviceTitles  = Service::where('is_featured', true)->select('title','short_detail', 'service_icon')->get();
        
        return view('welcome',compact('hero', 'serviceTitles'));
    }
}
