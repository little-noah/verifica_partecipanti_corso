@extends('app')

@section('title')
Edit user
@stop

@section('content')
<h1>Edit user </h1>
<hr />
{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update', $user->id]]) !!}
	@include('users.form', ['submitButtonText' => 'Update', 'create' => false])
{!! Form::close() !!}

@include('errors.list')

@stop