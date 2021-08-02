<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Document</title>
</head>
<body>
	
	<div class="container mt-5">
		<form method="POST">

			@csrf

			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class='form-control' name="name" value="{{ $country->name}}">
			</div>
			<div class="form-group">
				<label for="">Capital</label>
				<input type="text" class='form-control' name="capital" value="{{ $country->capital}}">
			</div>
			<div class="form-group">
				<label for="">Population</label>
				<input type="text" class='form-control' name="population" value="{{ $country->population}}">
			</div>
			<div class="form-group">
				<label for="">Is it NATO member?</label>

                    <div>
                        <label for="">Yes</label>
                        <input type="radio" value="1" name="is_nato"
                            @if($country->is_nato)
                                checked 
                            @endif 
                        >
                    </div>
                    <div>
                        <label for="">No</label>
                        <input type="radio" value="0" name="is_nato"
                            @if(!$country->is_nato)
                                checked 
                            @endif
                        > 
                    </div>
			</div>
			<div>
				<input type="submit" class="btn btn-danger" value="New">
			</div>
		</form>
	</div>
</body>
</html>