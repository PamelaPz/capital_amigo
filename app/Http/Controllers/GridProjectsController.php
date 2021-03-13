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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $grid_project = GridProjects::FindOrFail($id);

        if( $request->hasFile('imagen') ){
            $file = $request->file('imagen');
            $name = str_replace(' ','-', $file->getClientOriginalName());
            $path = 'Images/' . $name;
            Storage::putFileAs('/public/' . 'Images/', $file, $name );
            $grid_project::whereId($id)->update([
                'imagen' => $path,
            ]);
        }
        else{
            $grid_project->update($request->all());
        }

        return redirect()->route('grid_projects.index', compact('grid_project'));
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
