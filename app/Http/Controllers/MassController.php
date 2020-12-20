<?php

namespace App\Http\Controllers;

use App\Models\Mass;
use Illuminate\Http\Request;

class MassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Mass::orderBy('id')->get();
    }
    public function massUsers(Mass $mass)
    {
        return $mass->parishioners()->orderBy('lastname')->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mass  $mass
     * @return \Illuminate\Http\Response
     */
    public function show(Mass $mass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mass  $mass
     * @return \Illuminate\Http\Response
     */
    public function edit(Mass $mass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mass  $mass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mass $mass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mass  $mass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mass $mass)
    {
        //
    }
}
