<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\Counter;
use App\Mission;
use App\Platform;
use App\Slider;
use App\Team;
use Illuminate\Http\Request;

class ViewerController extends Controller
{
    public function index(){

        $sliders = Slider::all();
        $missions = Mission::all();
        $counters = Counter::all();
        $partners = Achievement::where('tag','partner')->get();
        $achievements = Achievement::where('tag','achievement')->get();
        $teams = Team::all();
        $platforms = Platform::all();

        return view('front.front_page', compact('sliders','missions','counters','partners','achievements','teams','platforms'));
    }
}
