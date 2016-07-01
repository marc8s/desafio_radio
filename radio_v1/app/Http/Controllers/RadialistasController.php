<?php

namespace App\Http\Controllers;
use DB;

class RadialistasController extends Controller
{
    //lista todos os radialistas
	public function getIndex(){
		$programas = DB::table('programas')->get();		
		return view('indexRadialistas', compact('programas'));
	}	
}
