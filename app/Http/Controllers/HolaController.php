<?php

namespace App\Http\Controllers;

class HolaController extends Controller{
	public function hola(){
		//$this->db->select('Select name')
		return "H@la UTVU";

	}
	public function adios($nombre = 'Ezequiel'){
		return "Adios ". $nombre." UTVT!!!";
	}

}