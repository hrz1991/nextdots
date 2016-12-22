{!! Form::open(['url' => 'facilities', 'method' => 'post']) !!}
	<input type="text" name="name" class="form-control" placeholder="Enter name" required autofocus>
	<br>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>

{!! Form::close() !!}