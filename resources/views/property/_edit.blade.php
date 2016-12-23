{{$_flagAssign = false}}
{!! Form::open(['url' => 'property/'.$_property->id, 'method' => 'put']) !!}
	<input value="{{$_property->title}}" type="text" name="title" class="form-control" placeholder="Enter title" required autofocus>
	<textarea type="text" name="description" class="form-control" required>{{$_property->description}}</textarea>
	<textarea type="text" name="address" class="form-control" required>{{$_property->address}}</textarea>
	<input value="{{$_property->town}}" type="text" name="town" class="form-control" placeholder="Enter town" required>
	<input value="{{$_property->county}}" type="text" name="county" class="form-control" placeholder="Enter county" required>
	<input value="{{$_property->country}}" type="text" name="country" class="form-control" placeholder="Enter country" required>

	<select name="state_id">
		@foreach ($_states as $_state)
			<option value="{{$_state->id}}" @if($_state->id == $_property->state_id) {{"selected"}} @endif>{{$_state->name}}</option>
		@endforeach
	</select>
	@foreach ($_facilities as $_facility)
		{{$_facility->name}}
		@foreach ($_property->facilities as $_property_facility)

			{{$_flagAssign = false}}
			@if($_facility->id == $_property_facility->id)
				{{$_flagAssign = true}}
				{{Form::checkbox('facilities[]', $_facility->id, true)}}	
				@break
			@endif
		@endforeach

		@if(!$_flagAssign)
			{{Form::checkbox('facilities[]', $_facility->id)}}	
		@endif

	@endforeach
	<br>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Edit</button>

{!! Form::close() !!}