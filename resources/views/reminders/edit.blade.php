@extends('app')

@section('content')
	<h1>Reminders - Edit</h1>

	 @foreach ($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach

	{!! Form::open(array('url' => 'reminders/'.$reminder->id, 'method' => 'put')) !!}
    	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <label for="name">Name</label><input id="name" name="name" value="{{ $reminder->name }}"/>
        <input type="submit">
    {!! Form::close() !!}

@stop