@extends('layout.mainlayout')

@section('main_content')
<h1><?=$title?> List</h1>
    <div class="container mt-3">
        <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('brand.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i>Add new Brand</a>
        </div>

        <br>
        <table class="table table-secondary table-striped">
            <tr>
                <th>ID</th>
                <th>Brand Name</th>
                <th>State</th>
                <th class="text-center">Actions</th>
            </tr>

            @foreach ($brand as $brn)

            <tr>
                <td>{{ $brn['brand_id'] }}</td>
                <td>{{ $brn['name'] }}</td>
                <td>{{ $brn['state'] }}</td>
                <td class="text-center d-flex justify-content-evenly">
                    <a class="btn btn-info" href="{{ route('brand.show', $brn->brand_id) }}">Show</a>
                    <a class="btn btn-warning" href="{{ route('brand.edit', $brn->brand_id) }}">Edit</a>
                    <form action="{{ route('brand.destroy', $brn) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach

        </table>

        

    </div>

@endsection