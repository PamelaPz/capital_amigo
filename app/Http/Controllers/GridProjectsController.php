<?php

namespace App\Http\Controllers;

use App\Models\GridProjects;
use Illuminate\Http\Request;

class GridProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grid_projects = GridProjects::all();
    
        return view('grid_projects.index', compact('grid_projects'));
    }

    public function edit($id)
    {
        $grid_project = GridProjects::find($id);

        return view('grid_projects.edit', compact('grid_project'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
