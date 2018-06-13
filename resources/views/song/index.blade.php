@extends('layouts.app')

@section('content')
<div class="container">

	<h1>All the songs</h1>
	
	<nav class="navbar navbar-inverse">
	    <ul class="nav navbar-nav">
	        <li><a href="{{ URL::to('songs') }}">View All Songs</a></li>
	        <li><a href="{{ URL::to('songs/create') }}">Add a Song</a>
	    </ul>
	</nav>

	<table class="table table-bordered">		
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Artist</th>
				<th scope="col">Title</th>
				<th scope="col">Url</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($songs as $song)
		<tr>
			<th scope="row">{{ $song->id }}</th>
			<td>{{ $song->artist }}</td>
			<td>{{ $song->title }}</td>
			<td style="position:relative;">
				<a href="{{ $song->url }}">{{ $song->url }}</a>
				<span style="position: absolute; right: 60px;"><a href="{{ URL::to('songs/' . $song->id . '/edit') }}" style="color:#3490DC"><i class="fas fa-pencil-alt"></i></a></span>
				<span style="position: absolute; right: 30px;"><a href="{{ URL::to('songs/delete/' . $song->id) }}" style="color:#E3342F"><i class="fas fa-trash-alt"></i></a></span>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection