@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-center mb-5">Create a New Furby</h1>
        <!--<form action="/orders" method="POST">-->
        {{--<form action="{{ route('orders.store') }}" method="POST">--}}
        <form action="https://laravel.merakischools.com/orders" method="POST">  
            @csrf
            <label for="name">Your Name:&nbsp;</label>
            <input type="text" id="name" name="name" required><br>
            <label for="type">Type:&nbsp;</label>
            <select name="type" id="type">
                <option value="furby babies">Furby Babies</option>
                <option value="furby friends">Furby Friends</option>
                <option value="emoto-tronic">Emoto-Tronic</option>
                <option value="furby boom">Furby Boom</option>
                <option value="furby connect">Furby Connect</option>
            </select><br>
            <label for="teeth">Teeth:&nbsp;</label>
            <select name="teeth" id="teeth">
                <option value="normal">Normal (Beak)</option>
                <option value="sharp">Sharp</option>
                <option value="flat">Flat</option>
            </select><br>
            <label for="body">Body:&nbsp;</label>
            <select name="body" id="body">
                <option value="normal">Normal</option>
                <option value="long">Long</option>
            </select><br>
            <label for="skin">Skin:&nbsp;</label>
            <select name="skin" id="skin">
                <option value="leopard">Leopard</option>
                <option value="snowy">Snowy</option>
                <option value="beans">Beans</option>
                <option value="spaghetti-os">Spaghetti-Os</option>
                <option value="skinless">Skinless</option>
            </select><br>
            <label for="eyes">Eyes:&nbsp;</label>
            <select name="eyes" id="eyes">
                <option value="normal">Normal</option>
                <option value="haunting">Haunting</option>
                <option value="enormous">Enormous</option>
            </select><br>
            <label for="limbs">Limbs:&nbsp;</label>
            <select name="limbs" id="limbs">
                <option value="normal">Normal</option>
                <option value="human">Human</option>
                <option value="insectoid">Insectoid</option>
            </select><br>
            <input type="submit" value="Order Furby">
        </form>
    </div>
</div>
@endsection

