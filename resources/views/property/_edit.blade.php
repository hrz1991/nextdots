{!! Form::open(['url' => 'facilities/'.$_property->id, 'method' => 'put']) !!}
	<input type="text" name="name" class="form-control" placeholder="Enter name" required autofocus>
	<textarea type="text" name="description" class="form-control" required></textarea>
	<br>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>

{!! Form::close() !!}