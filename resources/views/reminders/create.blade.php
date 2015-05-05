@extends('app')

@section('content')
	<h1>Reminders - Create</h1>

	@foreach ($errors->all() as $error)
		<p class="error">{{ $error }}</p>
	@endforeach

	<form method="post" action="/reminders">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<label for="name">Name</label><input id="name" name="name"/>
		<input type="submit">
	</form>
@stop