<a href="{{URL::to('/')}}">Back</a>
<a href="{{URL::to('/property/create')}}">Create property</a>

<hr>

<table>
<tbody>
	
	@foreach ($_properties as $_property)
		<tr>	
		<td>{{$_property->name}}</td>
		<td><a href="{{URL::to('property/'.$_property->id)}}">Show</a> </td>
		<td><a href="{{URL::to('/property/'.$_property->id.'/edit')}}">Edit</a> </td>
		<td>{!! Form::open(['url' => 'property/'.$_property->id, 'method' => 'delete']) !!}
			<button class="btn btn-lg btn-primary btn-block" type="submit">Delete</button>
		{!! Form::close() !!}</td>
	    </tr>
	@endforeach
</tbody>
</table>