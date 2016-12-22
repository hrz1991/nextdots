{!! Form::open(['url' => 'property', 'method' => 'post']) !!}
	<input type="text" name="title" class="form-control" placeholder="Enter title" required autofocus>
	<textarea type="text" name="description" class="form-control" required></textarea>
	<textarea type="text" name="address" class="form-control" required></textarea>
	<input type="text" name="town" class="form-control" placeholder="Enter town" required>
	<input type="text" name="county" class="form-control" placeholder="Enter county" required>
	<input type="text" name="country" class="form-control" placeholder="Enter country" required>
	<select name="state_id">
		@foreach ($_states as $_state)
			<option value="{{$_state->id}}">{{$_state->name}}</option>
		@endforeach
	</select>
	@foreach ($_facilities as $_facility)
		{{Form::checkbox('facilities[]', $_facility->id)}}
		{{$_facility->name}}
	@endforeach
	<br>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>

{!! Form::close() !!}