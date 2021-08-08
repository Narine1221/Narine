@extends("layouts.main")


@section("title", "Cars | Create")

@section("content")

	
	<div class="container mt-5">
		<form method="POST">

			@csrf

			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class='form-control text-dark' name="name" 
					value="{{$car->name}}">
			</div>
			<div class="form-group">
				<label for="">Model</label>
				<input type="text" class='form-control text-dark' name="model" 
					value="{{$car->model}}">
			</div>
			<div class="form-group">
				<label for="">Power</label>
				<input type="text" class='form-control text-dark' name="power"
					value="{{$car->power}}">
			</div>
			<div class="form-group">
				<label for="">Km</label>
				<input type="text" class='form-control text-dark' name="km"
					value="{{$car->km}}">
			</div>
            <div class="form-group">
				<label for="">Price</label>
				<input type="text" class='form-control text-dark' name="price"
					value="{{$car->price}}">
			</div>
            <div class="form-group">
				<label for="">Year</label>
				<input type="text" class='form-control text-dark' name="year"
					value="{{$car->year}}">
			</div>
			<div>
				<input type="submit" class="btn btn-secondary" value="Update">
			</div>
		</form>
	</div>

@endsection