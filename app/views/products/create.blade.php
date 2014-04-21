@extends('layouts.master')

@section('content')
{{ Form::open(['route'=>'product.store', 'class'=>'form-horizontal']) }}
<fieldset>
	<legend>
		<h2>Create a new product</h2>
	</legend>
	{{ Form::textField('name','Name') }}
	<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
				<label>
					<input type="checkbox"> Remember me
				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Sign in</button>
		</div>
	</div>
</fieldset>
{{ Form::close() }}

@stop