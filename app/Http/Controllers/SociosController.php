<?php

namespace App\Http\Controllers;

use App\Models\Socios;
use Illuminate\Http\Request;

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
