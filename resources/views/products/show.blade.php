@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 text-center">
        <h1 class="text-center">{{ $furby->sku }}</h1>
        <div class="text-center my-5">
            <p><strong>Type:&nbsp;</strong>{{ $furby->type }} - <strong>Teeth:&nbsp;</strong>{{ $furby->teeth }} - <strong>Body:&nbsp;</strong>{{ $furby->body }}
            <br><strong>Skin:&nbsp;</strong>{{ $furby->skin }} - <strong>Eyes:&nbsp;</strong>{{ $furby->eyes }} - <strong>Limbs:&nbsp;</strong>{{ $furby->limbs }}</p>
            <img style="max-height:300px;max-width:95%;" src="{{ $furby->url }}"/>
        </div>
        <a href="{{ route('furbies.index') }}">&lt;&lt; Back to All Furbies</a>
    </div>
</div>
@endsection

