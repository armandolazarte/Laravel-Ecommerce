@extends('layouts.back.master')

@section('content')
<div class="row">
	<div class="col-xs-6 col-md-3">
		<a href="{{ route('admin.products.index') }}" class="thumbnail">
			<img data-src="holder.js/100%x180/text:Products" alt="Products" />
		</a>
	</div>
</div>
@stop