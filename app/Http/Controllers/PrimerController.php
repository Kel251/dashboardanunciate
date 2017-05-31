<?php

namespace Anunciate\Http\Controllers;

class PrimerController extends Controller{
	public function inicio(){
		//$this->db->select('Select name')
		return view("inicio",['var1' => 'Universidad', 'var2' => 'Tecnologíca']);
	}
}