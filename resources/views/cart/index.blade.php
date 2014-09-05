@extends('layouts.master')

@section('content')

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
            <td><input type="number" class="form-control qty" min="1" value="{{ $row->qty }}"></td>
            <td>${{ $row->price }}</td>
            <td>${{ $row->subtotal }}</td>
            <td>
                {{ Form::open(['route' => 'cart.delete', 'method' => 'delete']) }}
                    {{ Form::hidden('rowId', $row->rowid) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {{ Form::close(); }}
            </td>
       </tr>

    @endforeach

    </tbody>
</table>

@stop
