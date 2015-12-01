@extends('app')

@section('title')
Index
@stop

@section('content')
<h1>Partecipanti</h1>
@if (count($students))
<ul>
	@foreach ($students as $student)
		<div>
			<h2><a href="{{action('StudentsController@show', [$student->id])}}">{{$student->name}}</a></h2>
			<ul>
				<li>{{$student->email}}</li>
				<li>{{$student->id}}</li>
				<li>{{$student->telephone}}</li>
			</ul>
		</div>
	@endforeach
</ul>


@else
<p>Non ci sono partecipanti</p>
@endif

@stop