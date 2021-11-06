@extends('layout.mainlayout')

@section('main_content')

<h1><?=$title?></h1>

<div class="container mt-3">  

    <form method="post" action="{{ route('brand.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Brand ID :</label>
            <input type="text" class="form-control" name="brand_id" placeholder="Enter brand ID">
        </div>
        <div class="form-group">
            <label>Brand name :</label>
            <input type="text" class="form-control" name="brand_name" placeholder="Enter brand name">
        </div>
        <div class="form-group">
            <label>Brand state :</label>
            <input type="text" class="form-control" name="brand_state" placeholder="Enter brand state">
        </div>
        <br>
    <button type="submit" class="btn btn-success">Submit</button>
    </form>









    
</div>

@endsection
