<?php

namespace App\Services;

use App\Area;

Class Areass{

	public function get(){
		$user_centrodesalud = auth()->user()->centrodesalud_codigo;
		$areas = Area::where('centrodesalud_codigo', $user_centrodesalud)->get();
		$areasArray[''] = 'Selecciona un Área';
		foreach ($areas as $area){
			$areasArray[$area->codigo] = $area->nombre;
		}

		return $areasArray;
	}

}