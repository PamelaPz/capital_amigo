<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Projects;
use App\Models\GridProjects;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function welcome()
    {
        $about = About::find(1);
        $project = Projects::find(1);
        $grid_project = GridProjects::all();

        return view('welcome', compact('about', 'project', 'grid_project'));
    }
}
