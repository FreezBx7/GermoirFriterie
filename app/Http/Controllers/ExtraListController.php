<?php

namespace App\Http\Controllers;

use App\ExtrasList;
use Illuminate\Http\Request;

class ExtraListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ExtrasList::all();
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
     * @param  \App\ExtrasList  $extrasList
     * @return \Illuminate\Http\Response
     */
    public function show(ExtrasList $extrasList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExtrasList  $extrasList
     * @return \Illuminate\Http\Response
     */
    public function edit(ExtrasList $extrasList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExtrasList  $extrasList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExtrasList $extrasList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExtrasList  $extrasList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExtrasList $extrasList)
    {
        //
    }
}
