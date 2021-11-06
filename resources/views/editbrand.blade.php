@extends('layout.mainlayout')

@section('main_content')

<h1><?=$title?></h1>

<div class="container mt-3">  
    {{-- <form method="post" action="{{ route('brand.update', $brand->id) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PATCH">
        <table border="0px">
            <tr>
                <td>Brand Name</td>
                <td>: <input type="text" name="brand_name" value="{{ $brand->name }}" required></td>
            </tr>
            <tr>
                <td>State</td>
                <td>: <input type="text" name="brand_state" value="{{ $brand->state }}" required></td>
            </tr>
            <tr>
        <td><input type="submit" class="btn btn-success"></td>
            </tr>
        </table>
    </form> --}}


    <form method="post" action="{{ route('brand.update', $brand->brand_id) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <label>Brand ID :</label>
            <input type="text" class="form-control" name="brand_id" value="{{ $brand->brand_id }}" required>
        </div>
        <div class="form-group">
            <label>Brand name :</label>
            <input type="text" class="form-control" name="brand_name" value="{{ $brand->name }}" required>
        </div>
        <div class="form-group">
            <label>Brand state :</label>
            <input type="text" class="form-control" name="brand_state" value="{{ $brand->state }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

@endsection