<?php

namespace App\Http\Controllers;

use App\Extra;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Extra::all();
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
     * @param  \App\Baking  $baking
     * @return \Illuminate\Http\Response
     */
    public function show(Baking $baking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Baking  $baking
     * @return \Illuminate\Http\Response
     */
    public function edit(Baking $baking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Baking  $baking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Baking $baking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Baking  $baking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Baking $baking)
    {
        //
    }
}
