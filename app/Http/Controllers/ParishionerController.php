<?php

namespace App\Http\Controllers;

use App\Models\Mass;
use App\Models\Parishioner;
use App\Models\User;
use Illuminate\Http\Request;

class ParishionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return User::orderBy('lastname','asc')->get();
    }
    public function getMasses(User $user)
    {

        return $user->masses()->get();
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
     * @param  \App\Models\Parishioner  $parishioner
     * @return \Illuminate\Http\Response
     */
    public function show(Parishioner $parishioner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parishioner  $parishioner
     * @return \Illuminate\Http\Response
     */
    public function edit(Parishioner $parishioner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parishioner  $parishioner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parishioner $parishioner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parishioner  $parishioner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parishioner $parishioner)
    {
        //
    }
}
