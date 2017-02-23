@extends('layout/style')

@section('content')

<h1>{{ $notes->title }}</h1>
{{ $notes->content }}

@stop