<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <a href="/products/create">New</a>
        <table class="table table-striped table-dark">
            <tr>
                <th>Name</th>
                <th>Count</th>
                <th>Price</th>
                <th>Views</th>
                <th>Description</th>
                <th>Action</th>

            </tr>
            @foreach($products as $product)
                <tr>
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
    
</body>
</html>