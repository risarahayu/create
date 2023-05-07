<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vet;

class VetController extends Controller
{
    public function form(){
        return view('vet.vetForm');
    }
    public function store(Request $request){
        $data= $request->all();
        // dd(array_key_exists('fullDay', $data));
        
        if(array_key_exists('fullDay', $data)) {
            if( $data['fullDay'] == 'on'){
                $data['fullDay'] = '1';
            } else {
                $data['fullDay']= '0'; 
            }
        } else{
            $data['fullDay']= '0';
        }

        $dataVet=Vet::create($data);

        return view('vet.Show', compact('dataVet'));
        
    }

    public function list(){

        $dataVet=Vet::all();
        // dd($dataVet);
        return view('vet.vetList', compact('dataVet'));
    }
}
