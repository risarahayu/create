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
        // dd($request->file('image'));
        // $request->file('image')->store('dog-image');
        // StrayDog::create($request->all());
        // dd($request->all());
         
            //  $data = new StrayDog;
            //  $data ->  animalType = $request->animalType;
            //  $data ->  color = $request->color;
            //  $data ->  temprament = $request->temprament ;
            //  $data ->  gender = $request->gender;
            //  $data ->  size = $request->size;
            //  $data ->  description = $request->description;
            //  $data -> save();


            if ($request->hasFile('image')) {
                $image = $request->file('image');
                foreach ($image as $files) {
                    // $destinationPath = 'public/storage/dog-image';
                    $destinationPath = $files -> store('dog-image');
                    $file_name = time() . "." . $files->getClientOriginalExtension();
                    $files->move($destinationPath, $file_name);
                    $data[] = $file_name;
                }
            }
            $file= new StrayDog();
            $file->image=json_encode($data);
             $file ->  animalType = $request->animalType;
             $file ->  color = $request->color;
             $file ->  temprament = $request->temprament ;
             $file ->  gender = $request->gender;
             $file ->  size = $request->size;
             $file ->  description = $request->description;
            $file->save();

            
             

      
   
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
