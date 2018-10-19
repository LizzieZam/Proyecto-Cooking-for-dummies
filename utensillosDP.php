<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class utencillosDP extends Controller
{

	 function create()
    {
       $utencillo=new utencillo($description,$useful,$tipo);
		$utencillo->createUtencillo($description,$useful,$tipo);
		return view('utencillo',['utencilloBlade'=>$utensillo]);
    }
	function tipoComida($tipo){
		
		if($tipo!=="asiatico")
			$tipoUtensillo='Palillos';
		else
			$tipoUtensillo='Cubiertos';
		$mensaje='El utencillo '.$description.' a sido creado exitosamente';
		return view('utencillo',['mensajeBlade'=>$mensaje]);
	}
	function update($id,$description,$useful,$tipo){
		$utencillo=new utencillo();
		$utencillo->updateUtencillo($id,$description,$useful,$tipo);
		$mensaje='El utencillo '.$description.' a sido modificado exitosamente';
		return view('utencillo',['mensajeBlade'=>$mensaje]);
	}
	function delete($id){
		$utencillo=new utencillo();
		$utencillo->deleteUtencillo($id);
		$mensaje='El utencillo a sido eliminado exitosamente';
		return view('utencillo',['mensajeBlade'=>$mensaje]);
	}
    
}
