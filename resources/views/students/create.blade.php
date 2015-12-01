@extends('app')

@section('title')
New user
@stop

@section('content')
<h1>New user</h1>
<hr />
{!! Form::model($user = new \App\User, array('action' => 'UsersController@index')) !!}
	@include('users.form', ['submitButtonText' => 'Save', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop