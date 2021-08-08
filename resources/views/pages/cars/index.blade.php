@extends("layouts.main")

@section("title", "Cars")

@section("content")

    <div class="container mt-5">
        <a href="/cars/create">New</a>
        <table class="table table-striped table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Model</th>
                <th>Power</th>
                <th>Km</th>
                <th>Price</th>
                <th>Year</th>
            </tr>
        @foreach($cars as  $key => $car)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{ $car->name }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->power }}</td>
                <td>{{ $car->km }}</td>
                <td>{{ $car->price }}</td>
                <td>{{ $car->year }}</td>
                <td>

                    <a href="{{ route("cars.edit", ["id" => $car->id]) }}" class="btn btn-info">Edit</a>

                    <form action="/cars/delete/{{ $car->id }}" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-primary" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </table>

    </div>


















@endsection