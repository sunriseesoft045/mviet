<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutPageController extends Controller
{
    public function visionMission(): View
    {
        return view('about.vision-mission');
    }

    public function management(): View
    {
        return view('about.management');
    }

    public function proctorialBoard(): View
    {
        return view('about.proctorial-board');
    }

    public function officerIncharge(): View
    {
        return view('about.officer-incharge');
    }

    public function strategicPlan(): View
    {
        return view('about.strategic-plan');
    }

    public function whyUsi(): View
    {
        return view('about.why-usi');
    }
}