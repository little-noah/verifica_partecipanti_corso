@extends('app')

@section('title')
Nuovo Partecipante
@stop

@section('content')
<h1>Nuovo Partecipante</h1>
<hr />
{!! Form::model($student = new \App\Student, array('action' => 'StudentsController@index')) !!}
	@include('students.form', ['submitButtonText' => 'Save', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop