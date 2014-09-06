@extends('layouts.master')

@section('content')
    {{ Form::open(['route' => 'user.save', 'class' => 'form-horizontal', 'method' => 'put']) }}
        <div class="form-group">
            {{ Form::label('email', 'Email:', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
                {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email']) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password:', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
                {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('password_confirmation', 'Password Confirmation:', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </div>
    {{ Form::close() }}
@stop