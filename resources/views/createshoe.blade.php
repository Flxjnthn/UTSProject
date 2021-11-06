@extends('layout.mainlayout')

@section('main_content')
<h1><?=$title?></h1>

<div class="container mt-3">  

    <form method="post" action="{{ route('shoe.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Shoe name : </label>
            <input type="text" class="form-control" name="shoe_name" placeholder="Enter shoe name">
        </div>
        <div class="form-group">
            <label>Shoe size</label>
            <input type="text" class="form-control" name="shoe_size" placeholder="Enter shoe size">
        </div>
        <div class="form-group">
            <label>Shoe color :</label>
            <input type="text" class="form-control" name="shoe_color" placeholder="Enter shoe color">
        </div>
        <div class="form-group">
            <label>Shoe type :</label>
            <input type="text" class="form-control" name="shoe_type" placeholder="Enter shoe type">
        </div>
        <div class="form-group">
            <label>Production by :</label>
            <input type="text" class="form-control" name="pro_id" placeholder="Enter production">
        </div>
        <br>
    <button type="submit" class="btn btn-success">Submit</button>
    </form>

</div>

@endsection