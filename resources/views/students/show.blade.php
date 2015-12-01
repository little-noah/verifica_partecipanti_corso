@extends('app')

@section('title')
{{$student->name}}
@stop

@section('content')
<h1>{{$student->name}}</h1>
<ul>
	<li>{{$student->email}}</li>
	<li>{{$student->id}}</li>
	<li>{{$student->telephone}}</li>
</ul>
@stop