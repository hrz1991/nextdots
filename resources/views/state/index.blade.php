<a href="{{URL::to('/')}}">Back</a>
<a href="{{URL::to('/state/create')}}">Create state</a>

<hr>

<table>
<tbody>
	
	@foreach ($_states as $_state)
		<tr>	
		<td>{{$_state->name}}</td>
		<td><a href="{{URL::to('state/'.$_state->id)}}">Show</a> </td>
		<td><a href="{{URL::to('/state/'.$_state->id.'/edit')}}">Edit</a> </td>
		<td>{!! Form::open(['url' => 'state/'.$_state->id, 'method' => 'delete']) !!}
			<button class="btn btn-lg btn-primary btn-block" type="submit">Delete</button>
		{!! Form::close() !!}</td>
	    </tr>
	@endforeach
</tbody>
</table>