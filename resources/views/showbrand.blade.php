@extends('layout.mainlayout')

@section('main_content')

<h1><?=$title?></h1>

<div class="container">
    <div class="mt-4 p-5 bg-primary primary text-white rounded">
        {{-- Manggil $brand dari variabel di Brandcontroller --}}
        <h1>{{ $brand['name'] }}</h1>
        <p>ID : {{ $brand['brand_id'] }}</p>
        <p>State : {{ $brand['state'] }}</p>
        <p>Created at : {{ $brand['created_at'] }}</p>
    </div>
</div>
@endsection