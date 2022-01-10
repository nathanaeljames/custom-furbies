@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 text-center">
        <h1 class="text-center">{{ $order->name }}</h1>
        <div class="text-center my-5">
            <p><strong>Type:&nbsp;</strong>{{ $order->type }} - <strong>Teeth:&nbsp;</strong>{{ $order->teeth }} - <strong>Body:&nbsp;</strong>{{ $order->body }}
            <br><strong>Skin:&nbsp;</strong>{{ $order->skin }} - <strong>Eyes:&nbsp;</strong>{{ $order->eyes }} - <strong>Limbs:&nbsp;</strong>{{ $order->limbs }}</p>
            <!--<form action="/orders/{{ $order->id }}" method="POST">-->
            {{--<form action="{{ route('orders.destroy', $order->id) }}" method="POST">--}}
            <form action="https://laravel.merakischools.com/orders/{{ $order->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Complete Order</button>
            </form>
        </div>
        <a href="{{ route('orders.index') }}">&lt;&lt; Back to All Orders</a>
    </div>
</div>
@endsection

