@extends('layout.mainlayout')

@section('main_content')
<h1><?=$title?></h1>

<div class="container mt-3">  

    <form method="post" action="{{ route('shoe.update', $shoe->id) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <label>Shoe name : </label>
            <input type="text" class="form-control" name="shoe_name" value="{{ $shoe->name }}" required>
        </div>
        <div class="form-group">
            <label>Shoe size</label>
            <input type="text" class="form-control" name="shoe_size" value="{{ $shoe->size }}" required>
        </div>
        <div class="form-group">
            <label>Shoe color :</label>
            <input type="text" class="form-control" name="shoe_color" value="{{ $shoe->color }}" required>
        </div>
        <div class="form-group">
            <label>Shoe type :</label>
            <input type="text" class="form-control" name="shoe_type" value="{{ $shoe->type }}" required>
        </div>
        <div class="form-group">
            <label>Production by :</label>
            <input type="text" class="form-control" name="pro_id" value="{{ $shoe->pro_id }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>

</div>

@endsection