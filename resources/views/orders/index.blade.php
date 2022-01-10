@extends('layouts.app')

@section('content')
<div class="p-3 relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-center pt-4">Orders</h1>
        @foreach($orders as $order)
            <div class="text-center mt-5">
                <p class="mb-0"><strong>Name:&nbsp;</strong>{{ $order->name }}
                <br><strong>Type:&nbsp;</strong>{{ $order->type }} - <strong>Teeth:&nbsp;</strong>{{ $order->teeth }} - <strong>Body:&nbsp;</strong>{{ $order->body }}
                <br><strong>Skin:&nbsp;</strong>{{ $order->skin }} - <strong>Eyes:&nbsp;</strong>{{ $order->eyes }} - <strong>Limbs:&nbsp;</strong>{{ $order->limbs }}</p>
                <a href="{{ route('orders.show', $order->id) }}">View Order</a>
            </div>
        @endforeach
    </div>
</div>
@endsection

