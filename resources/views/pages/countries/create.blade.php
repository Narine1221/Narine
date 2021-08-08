@extends("layouts.main")

@section("title", "Products")


@section("content")
	
	<div class="container mt-5">
		<form method="POST">

			@csrf

			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class='form-control bg-secondary' name="name">
			</div>
			<div class="form-group">
				<label for="">Capital</label>
				<input type="text" class='form-control bg-secondary' name="capital">
			</div>
			<div class="form-group">
				<label for="">Population</label>
				<input type="text" class='form-control bg-secondary' name="population">
			</div>


			<div>
				<label for="">Is NATO</label>
				<div>
					<label for="">Yes</label>
		            <input type="radio" name="is_nato" value="1">
				</div>
				<div>
					<label for="">No</label>
		            <input type="radio" name="is_nato" value="0">
				</div>

			</div>
			
			<div>
				<input type="submit" class="btn btn-danger" value="Update">
			</div>
		</form>
	</div>
	
@endsection