{!! Form::open(['url' => 'facility/'.$_facility->id, 'method' => 'put']) !!}
	<input type="text" name="name" class="form-control" placeholder="Enter name" required autofocus value="{{$_facility->name}}">
	<br>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Edit</button>
{!! Form::close() !!}