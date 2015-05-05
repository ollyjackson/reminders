@extends('app')

@section('content')
	<h1>Reminders - List</h1>

	@foreach ($reminders as $reminder)
		<p><a href="/reminders/{{ $reminder->id }}">{{ $reminder->name }}</a> <a href="/reminders/{{ $reminder->id }}/edit">[edit]</a></p>
	@endforeach

	{!! $reminders->render() !!}
@stop