@extends('layout.mainlayout')

@section('main_content')
<h1><?=$title?></h1>
<div class="container">
    <div class="mt-4 p-5 bg-primary primary text-white rounded">
        {{-- Manggil $brand dari variabel di Brandcontroller --}}
        <h1>{{ $shoe['name'] }}</h1>
        <p>Name : {{ $shoe['size'] }}</p>
        <p>Color : {{ $shoe['color'] }}</p>
        <p>Type : {{ $shoe['type'] }}</p>
        <p>Created at : {{ $shoe['created_at'] }}</p>
    </div>
</div>
@endsection