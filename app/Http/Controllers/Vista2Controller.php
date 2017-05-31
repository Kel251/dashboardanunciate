<?php

namespace Anunciate\Http\Controllers;

class Vista2Controller extends Controller{
	public function index(){
		//$this->db->select('Select name')
		return view("ejemplo/index",['var1' => 'Universidad', 'var2' => 'Tecnologíca']);
	}
}