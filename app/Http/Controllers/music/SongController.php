<?php

namespace App\Http\Controllers\music;
use DB;
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
		$aCss = array('css/song/style.css');
		$aScript = array('ja/song/main/js');
		$this->data = array(
			'title'=>'Music band',
			'band'=>'metallica',
			'song'=>'<u>black</u>',
			'style'=>$aCss,
			'script'=>$aScript

		);
		return view('song/band', $this->data);
	}
	
}