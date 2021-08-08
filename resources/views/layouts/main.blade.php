<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="nkari_link">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>
        @yield("title")
    </title>
</head>
<body>

   <div>
        <ul class="row" style="list-style: none;">

            <li class="col-2">
                <a href="{{ route("countries.index") }}" class="btn
                    @if(explode(".", Route::current()->getName())[0] == 'countries')
                        btn-primary
                    @else
                        btn-secondary
                    @endif
                display-block w-100">
                    Countries
                </a>
            </li>

            <li class="col-2">
                <a href="{{ route("cars.index") }}" class="btn
                    @if(explode(".", Route::current()->getName())[0] == 'cars')
                        btn-primary
                    @else
                        btn-secondary
                    @endif
                display-block w-100">
                    Cars
                </a>
            </li>
        </ul>
    </div>

    @yield("content")



     @stack("_js")
</body>
</html>