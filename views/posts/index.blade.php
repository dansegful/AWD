@extends('layouts.master')

@section('content')

<h1>Jeux-vidéo disponibles</hi>


@foreach($posts as $post)
    <a href="{{ URL::route('posts.show',$post->slug) }}">
        <h2>{{ $post->name }}</h2>
    </a>
@endforeach

{{ $posts->links() }}

@stop
