<?php

namespace App\Http\Controllers;

use App\Models\Socios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SociosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socios = Socios::all();
    
        return view('socios.index', compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $socio = Socios::get();

        return view('socios.create', compact('socio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $socio = new Socios;

        if( $request ){
            $file = $request->file('imagen');
            $name = str_replace(' ','-', $file->getClientOriginalName());
            $path = 'Images/' . $name;
            Storage::putFileAs('/public/' . 'Images/', $file, $name );
            $socio::create([
                'imagen' => $path,
            ]);
        }

        return redirect()->route('socios.index', compact('socio'));
    }

    public function edit($id)
    {
        $socio = Socios::find($id);
    
        return view('socios.edit', compact('socio'));
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
        $socio = Socios::FindOrFail($id);

        if( $request->hasFile('imagen') ){
            $file = $request->file('imagen');
            $name = str_replace(' ','-', $file->getClientOriginalName());
            $path = 'Images/' . $name;
            Storage::putFileAs('/public/' . 'Images/', $file, $name );
            $socio::whereId($id)->update([
                'imagen' => $path,
            ]);
        }

        return redirect()->route('socios.index', compact('socio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socio = Socios::find($id)->delete();

        return back();
    }
}
