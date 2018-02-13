<?php

namespace App\Http\Controllers\music;
use App\Http\Controllers\Controller;


class SongController extends Controller
{
	
	function __construct()
	{
		# code...
	}

	// public function index()
	// {
	// 	// return'Hello From Somg Controller';
	// 	return view('song/index');
	// }

	// public function play()
	// {
	// 	// return view('song/player')
	// 	// ->with('band','oasis')
	// 	// ->with('album','Morning');


	// 	// return view('song/player')->with(['band'=>'oasis',
	// 	// 	'album'=>'Slide away'
	// 	// ]);

	// 	// returm view('song/player')->withBand('oasis')->withBand

	// 	// $this->data= array(

	// 	// )

	// 	return view('song/player');
	// }

	public function band()
	{
		$this->data = array(
			'band'=>'metallica',
			'song'=>'black'

		);
		return view('song/band', $this->data);
	}
	
}