@extends('layouts.master')

@section('title')
    Orders
@endsection

@section('content')
<div class="container">
    @include('_messages')
    <h2>Orders</h2>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ Html::linkRoute('order.show', '000-0' . $order->id, array($order->id)) }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->phone_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection