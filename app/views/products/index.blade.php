@extends('layouts.master')

@section('content')
    
	@foreach ($items as $item)
   		<div class="col-md-4">
   			{{ link_to_action('ProductsController@show', $item->name, ['id'=>$item->id]) }}
   		</div>
	@endforeach

	{{ $items->links() }}

@stop