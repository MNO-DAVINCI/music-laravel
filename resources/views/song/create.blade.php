@extends('layouts.app')

@section('content')
<div class="container">

	<h1>Add a new song</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
	
	<nav class="navbar navbar-inverse">
	    <ul class="nav navbar-nav">
	        <li><a href="{{ URL::to('songs') }}">View All Songs</a></li>
	    </ul>
	</nav>

	<form method="POST" action="{{ url('songs') }}">
        @csrf

		<div class="form-group row">
            <label for="artist" class="col-sm-4 col-form-label text-md-right">{{ __('Artist Name') }}</label>

            <div class="col-md-6">
                <input id="artist" type="text" name="artist" value="{{ old('artist') }}" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Song Title') }}</label>

            <div class="col-md-6">
                <input id="title" type="text" name="title" value="{{ old('title') }}" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="url" class="col-sm-4 col-form-label text-md-right">{{ __('Youtube link') }}</label>

            <div class="col-md-6">
                <input id="url" type="text" name="url" value="{{ old('url') }}" required autofocus>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }} <i class="fab fa-accessible-icon"></i>
                </button>                             
            </div>
        </div>
	</form>
</div>
@endsection