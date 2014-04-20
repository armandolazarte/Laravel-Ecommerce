@extends('layouts.master')

@section('content')

<div class="row">
@foreach ($items as $item)
	<div class="col-md-3">
		<div class="product-list">
			<div class="product-image-container">
				<a href="{{ url('product/'.$item->id) }}">
					<img class="img-responsive" src="{{ $item->image }}" />
				</a>
			</div>
			<h5>{{ link_to_action('ProductsController@show', $item->name, ['id' => $item->id]) }}</h5>
			<div class="content-price">
				<span class="price product-price">
					${{ $item->price }}
				</span>
			</div>
			{{ link_to_action('ProductsController@show', 'MORE DETAILS', ['id' => $item->id], ['class'=>'btn btn-birdieland']) }}
		</div>
	</div>
@endforeach
</div>
<div class="pagination-container">
	{{ $items->links() }}
</div>

@stop