<?php

namespace App\Http\Controllers;
use DB;

class RadialistasController extends Controller
{
    //lista todos os radialistas
	public function getIndex(){
		$radialistas = DB::table('programas')->select('radialista')->distinct()->get();
		//$programas = DB::table('programas')->get();		
		return view('indexRadialistas', compact('radialistas'));
	}	
}
