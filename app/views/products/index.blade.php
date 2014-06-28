@extends('layouts.front.master')

@section('content')
<div class="row">
	@foreach ($items as $item)
	<div class="col-md-3">
		<div class="product-list">
			<div class="product-image-container">
				<a href="{{ route('products.show', ['url' => $item->url]) }}">
					<img class="img-responsive" src="{{ $item->image }}" />
				</a>
			</div>
			<h5>{{ link_to_route('products.show', $item->name, ['url' => $item->url]) }}</h5>
			<div class="content-price">
				<span class="price product-price">
					${{ $item->price }}
				</span>
			</div>
			{{ link_to_route('products.show', $item->name, ['url' => $item->url], ['class'=>'btn btn-birdieland']) }}
		</div>
	</div>
	@endforeach
</div>
<div class="pagination-container">
	{{ $items->links() }}
</div>

@stop