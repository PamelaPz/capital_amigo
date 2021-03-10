<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
    
        return view('teams.index', compact('teams'));
    }

    public function edit($id)
    {
        $team = Team::find($id);
    
        return view('teams.edit', compact('team'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teams = Team::find($id);

        return view('teams.show', compact('teams'));
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
        $team = Team::FindOrFail($id);

        if( $request->hasFile('imagen') ){
            $file = $request->file('imagen');
            $name = str_replace(' ','-', $file->getClientOriginalName());
            $path = 'Images/' . $name;
            Storage::putFileAs('/public/' . 'Images/', $file, $name );
            $team::whereId($id)->update([
                'name' => $request->name,
                'puesto' => $request->puesto,
                'imagen' => $path,
            ]);
        }
        else{
            $team->update($request->all());
        }

        return redirect()->route('teams.index', compact('team'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id)->delete();

        return back();
    }
}
