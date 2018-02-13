@extends('layouts/main')

@section('title', 'band new song')

@section('content')
 
	@if($band == 'metallica')
		<h2>band :: {{$band}}</h2>
		<h2>song :: {{$song}}</h2>

	@else
		no band and song
	@endif


@endsection

