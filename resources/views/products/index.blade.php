@extends('layouts.app')

@section('content')
<div class="p-3 relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-center pt-4">Adopt a Refurbished Furby</h1>
        <h2 class="text-center">Somebody loved them once. You can love them again. Take home a refurbished furby today!</h2>
        @foreach($furbies as $furby)
            <div class="text-center mt-5">
                <p class="mb-0"><strong>Type:&nbsp;</strong>{{ $furby->type }} - <strong>Teeth:&nbsp;</strong>{{ $furby->teeth }} - <strong>Body:&nbsp;</strong>{{ $furby->body }}
                <br><strong>Skin:&nbsp;</strong>{{ $furby->skin }} - <strong>Eyes:&nbsp;</strong>{{ $furby->eyes }} - <strong>Limbs:&nbsp;</strong>{{ $furby->limbs }}</p>
                <!--<a href="furbies/{{ $furby->id }}">View Furby</a><br>-->
                <a href="{{ route('furbies.show', $furby->id) }}">View Furby</a><br>
                <img style="max-height:300px;max-width:95%;" src="{{ $furby->url }}"/>
            </div>
        @endforeach
    </div>
</div>
@endsection

