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
			<td><a href="{{ $song->url }}">{{ $song->url }}</a></td>
		</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection