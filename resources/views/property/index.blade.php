<a href="{{URL::to('/')}}">Back</a>
<a href="{{URL::to('/property/create')}}">Create property</a>

<hr>

<table class="table table-hover table-bordered">
<thead>
	<tr>
		<th>Title</th>
		<th>Description</th>
		<th>Address</th>
		<th>Town</th>
		<th>County</th>
		<th>Country</th>
		<th>State</th>
		<th>Facilities</th>
		<th>Actions</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($_properties as $_property)
		<tr>	
		<td>{{$_property->title}}</td>
		<td>{{$_property->description}}</td>
		<td>{{$_property->address}}</td>
		<td>{{$_property->town}}</td>
		<td>{{$_property->county}}</td>
		<td>{{$_property->country}}</td>
		<td>{{$_property->state->name}}</td>
		<td>
			@foreach ($_property->facilities as $_facility)
				{{$_facility->name}}
			@endforeach
		</td>
		<td><a href="{{URL::to('property/'.$_property->id)}}">Show</a> </td>
		{{-- <td><a href="{{URL::to('/property/'.$_property->id.'/edit')}}">Edit</a> </td> --}}
		<td>{!! Form::open(['url' => 'property/'.$_property->id, 'method' => 'delete']) !!}
			<button class="btn btn-lg btn-primary btn-block" type="submit">Delete</button>
		{!! Form::close() !!}</td>
	    </tr>
	@endforeach
</tbody>
</table>