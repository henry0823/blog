@extends('layout/style')

@section('content')

<h1>Create Blog</h1>

{{ Form::open(['url'=>'/notes/create/store', 'method'=>'post']) }}
{{ Form::label('title', '標題') }}<br>
{{ Form::text('title') }}<br>
{{ Form::label('content', '內容') }}<br>
{{ Form::textarea('content') }}<br>
{{ Form::submit('確認') }}
{{ Form::close() }}

@stop