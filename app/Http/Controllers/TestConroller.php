<?php

namespace App\Http\Controllers;
use Illuminate\Http\Controllers\Controller;


class TestController extends Controller
{

public function band()
	{
		$this->data = array(
			'band'=>'merallica'
			'song'=>'black'

		);
		return view('song/band',$this->data);
	}

}