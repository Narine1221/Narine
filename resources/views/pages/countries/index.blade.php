@extends("layouts.main")

@section("title", "Products")


@section("content")
<div class="container mt-5">
        <a href="/countries/create">New</a>
        <table class="table table-striped table-dark">
            <tr>
                <th>Name</th>
                <th>Capital</th>
                <th>Population</th>
                <th>Is Nato</th>
                <th>Views</th>
                <th>Action</th>

            </tr>
            @foreach($countries as $country)
                <tr>
                    <td>{{ $country->name }}</td>
                    <td>{{ $country->capital }}</td>
                    <td>{{ $country->population }}</td>
                    <td>{{ $country->is_nato }}</td>
                    <td>{{ $country->views }}</td>
                    <td>
                        <a href="/countries/edit/{{ $country->id }}" class="btn btn-warning">Edit</a>

                        <form action="/countries/delete/{{ $country->id }}" method="POST">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    
@endsection