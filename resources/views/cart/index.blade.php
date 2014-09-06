@extends('layouts.master')

@section('content')
{{ Form::open(['route' => 'cart.update', 'method' => 'post']) }}
<table class="table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>Item Price</th>
            <th>Subtotal</th>
            <th></th>
        </tr>
    </thead>

    <tbody>

    @foreach(Cart::content() as $row)

        <tr>
            <td>
                {{ $row->name }}
            </td>
            <td><input type="number" name="item[{{ $row->rowid }}]" class="form-control qty" min="1" value="{{ $row->qty }}"></td>
            <td>${{ $row->price }}</td>
            <td>${{ $row->subtotal }}</td>
            <td>
                {{ link_to_route('cart.delete','Delete', ['rowid' => $row->rowid], ['class' => 'btn btn-danger']) }}
            </td>
       </tr>

    @endforeach

    </tbody>

    <tfoot>
        <tr>
            <th colspan="3">
                Total:
            </th>
            <td colspan="2">
                ${{ Cart::total() }}
            </td>
        </tr>
    </tfoot>

</table>
<p class="pull-right">

    {{ Form::submit(\App\Cart\Steps::UPDATE, ['class' => 'btn btn-success', 'name' => 'action']) }}
    {{ Form::submit(\App\Cart\Steps::CHECKOUT, ['class' => 'btn btn-primary', 'name' => 'action']) }}
</p>
{{ Form::close() }}
@stop
