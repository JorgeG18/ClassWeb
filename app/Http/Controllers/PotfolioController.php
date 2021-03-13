<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

@return \Illuminate\Http\Response

class PotfolioController extends Controller{



    public function index(){
        $portafolio=[
             ['title'=> 'Proyecto #1'],
            ['title'=> 'Proyecto #2'],
            ['title'=> 'Proyecto #3'],
            ['title'=> 'Proyecto 4'],
        ];
    return view('Portafolio', compact('portafolio'));
}

@return \Illuminate\Http\Response

public function create(){

}


