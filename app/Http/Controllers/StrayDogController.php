<?php

namespace App\Http\Controllers;

use App\StrayDog;
use App\gender;
use Illuminate\Http\Request;

class StrayDogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gender = gender::all();
        return view('StrayDogForm', compact('gender'));
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
        
        StrayDog::create($request->all());
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StrayDog  $strayDog
     * @return \Illuminate\Http\Response
     */
    public function show(StrayDog $strayDog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StrayDog  $strayDog
     * @return \Illuminate\Http\Response
     */
    public function edit(StrayDog $strayDog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StrayDog  $strayDog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StrayDog $strayDog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StrayDog  $strayDog
     * @return \Illuminate\Http\Response
     */
    public function destroy(StrayDog $strayDog)
    {
        //
    }
    
}
