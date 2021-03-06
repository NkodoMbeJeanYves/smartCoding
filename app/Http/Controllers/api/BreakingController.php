<?php

namespace App\Http\Controllers\api;

use App\Models\headline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BreakingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(headline::all());
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
     * @param  \App\Models\headline  $headline
     * @return \Illuminate\Http\Response
     */
    public function show(headline $headline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\headline  $headline
     * @return \Illuminate\Http\Response
     */
    public function edit(headline $headline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\headline  $headline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, headline $headline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\headline  $headline
     * @return \Illuminate\Http\Response
     */
    public function destroy(headline $headline)
    {
        //
    }
}
