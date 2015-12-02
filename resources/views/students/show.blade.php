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
<table>
	<tr>
		<td><a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Modifica</a></td>
		<td>{!! Form::open(['action' => ['StudentsController@destroy', $student->id], 'method' => 'delete'])!!}
			{!! Form::submit('Cancella', array('class'=> 'btn btn-danger'))!!}
			{!! Form::close()!!}</td>
	</tr>
</table>
@stop