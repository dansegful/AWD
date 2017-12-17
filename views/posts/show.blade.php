@extends('layouts.master')

@section('content')

<h2>{{ $post->name }}</h2>
<p>{{ HTML::image($post->content) }}</p>


@stop
