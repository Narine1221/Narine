@extends("layouts.main")

@section("title", "Products")

@push("_js")
    <script>
        alert(1);
    </script>

@endpush

@section("content")

<div class="container mt-5">
    @auth
        <a href="/products/create">New</a>
    @else
        Sign to create
    @endauth
    {{-- @guest --}}
    <table class="table table-striped table-dark">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Count</th>
            <th>Price</th>
            <th>Views</th>
            <th>Description</th>
            <th>Action</th>

        </tr>

      {{--   @php 
            $num = 1;
        @endphp --}}

        @foreach($products as $key => $product)
            <tr>
            {{--<td>{{ $num++ }}</td>//aranc ++-i yete nerqevi php in ashxatacnenq
                @php 
                    $num++
                @endphp --}}
                <td>{{$key + 1}}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->count }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->views }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="/products/edit/{{ $product->id }}" class="btn btn-warning">Edit</a>

                    <form action="/products/delete/{{ $product->id }}" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
{{--  @foreach($products as $product)

    <p>
        {{$product->name}}
    </p>
    
@endforeach --}}



@endsection