@extends('layout/style')

@section('content')

<h1>My Blog</h1>

@foreach($notes as $note)
	<div>
		<a href="/notes/{{ $note->id }}"><li>{{ $note->title }}</li></a>
	</div>
@endforeach
<hr>

<a href="/notes/create">Create</a>

@stop