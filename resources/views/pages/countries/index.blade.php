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
    
</body>
</html>