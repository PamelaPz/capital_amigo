<?php

namespace App\Http\Controllers;

use App\Models\GridProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grid_projects = GridProjects::get();

        return view('grid_projects.create', compact('grid_projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grid_projects = new GridProjects;

        if( $request->file('imagen') ){
            $file = $request->file('imagen');
            $name = str_replace(' ','-', $file->getClientOriginalName());
            $path = 'Images/' . $name;
            Storage::putFileAs('/public/' . 'Images/', $file, $name );
            $grid_projects::create([
                'imagen' => $path,
                'name' => $request->name,
                'status' => $request->status
            ]);
        }

        return redirect()->route('grid_projects.index', compact('grid_projects'));
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $grid_projects = GridProjects::FindOrFail($id);

        if( $request->hasFile('imagen') ){
            $file = $request->file('imagen');
            $name = str_replace(' ','-', $file->getClientOriginalName());
            $path = 'Images/' . $name;
            Storage::putFileAs('/public/' . 'Images/', $file, $name );
            $grid_projects::whereId($id)->update([
                'imagen' => $path,
                'name' => $request->name,
                'status' => $request->status,
            ]);
        }
        else{
            $grid_projects->update($request->all());
        }

        return redirect()->route('grid_projects.index', compact('grid_projects'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grid_project = GridProjects::find($id)->delete();

        return back();
    }
}
