<a href="{{URL::to('/')}}">Back</a>
<a href="{{URL::to('/facility/create')}}">Create facility</a>

<hr>

<table>
<tbody>
	
	@foreach ($_facilities as $_facility)
		<tr>	
		<td>{{$_facility->name}}</td>
		<td><a href="{{URL::to('facility/'.$_facility->id)}}">Show</a> </td>
		<td><a href="{{URL::to('/facility/'.$_facility->id.'/edit')}}">Edit</a> </td>
		<td>{!! Form::open(['url' => 'facility/'.$_facility->id, 'method' => 'delete']) !!}
			<button class="btn btn-lg btn-primary btn-block" type="submit">Delete</button>
		{!! Form::close() !!}</td>
	    </tr>
	@endforeach
</tbody>
</table>