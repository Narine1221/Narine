@extends("layouts.main")

@section("title", "Products")


@section("content")
	
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
@endsection