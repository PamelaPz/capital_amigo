<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Projects;
use App\Models\GridProjects;
use App\Models\Socios;
use App\Models\Contact;
use App\Models\Team;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function welcome()
    {
        $about = About::find(1);
        $project = Projects::find(1);
        $grid_projects = GridProjects::all();
        $socios = Socios::all();
        $contact = Contact::find(1);
        $teams = Team::all();

        return view('welcome', compact('about', 'project', 'grid_projects', 'socios', 'contact', 'teams'));
    }
}
