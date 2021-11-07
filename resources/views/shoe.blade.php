@extends('layout.mainlayout')

@section('main_content')
<h1><?=$title?> List</h1>
    <div class="container mt-3">
        <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('shoe.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i>+</a>
        </div>

        <br>
        <table class="table table-secondary table-striped">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>Size</th>
                <th>Color</th>
                <th>Type</th>
                <th>Production By</th>
                <th class="text-center">Actions</th>
            </tr>

            {{-- karena bentuknya array  --}}
            {{-- $shoe dari shoeController --}}
            @foreach ($shoe as $sho)

            <tr>
                <td>{{ $sho['id'] }}</td>
                <td>{{ $sho['name'] }}</td>
                <td>{{ $sho['size'] }}</td>
                <td>{{ $sho['color'] }}</td>
                <td>{{ $sho['type'] }}</td>
                <td>
                    <a href="{{ route('brand.show', $sho->brand->brand_id) }}">
                        {{ $sho->brand->name }}
                </td>
                <td class="text-center d-flex justify-content-evenly">
                    <a class="btn btn-info" href="{{ route('shoe.show', $sho->id) }}">Show</a>
                    <a class="btn btn-warning" href="{{ route('shoe.edit', $sho->id) }}">Edit</a>
                    <form action="{{ route('shoe.destroy', $sho) }}" method="POST">
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