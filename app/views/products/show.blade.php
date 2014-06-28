@extends('layouts.front.master')

@section('content')
<div class="product-individual">
	<div class="row">
		<div class="col-sm-4 col-md-5">
			<div id="image-block" class="clearfix">
				<img class="img-responsive" src="{{ $item->image }}" />
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<h1>{{ $item->name }}</h1>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-3">
			<div class="box-info-product">
				<div class="content-price">
					<span class="price product-price">
						${{ $item->price }}
					</span>
				</div>
			</div>
		</div>
	</div>
	@stop