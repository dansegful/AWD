@extends('layouts.master')

@section('content')

      @foreach($posts as $post)

            <br>
            <br>
            {{ $post->name }}
          
            <a href="{{ URL::route('posts.edit',$post->id) }}">Editer</a>
            {{ Form::open(['route'=>['posts.delete',$post->id], 'method'=>'delete']) }}
                {{ Form::submit('Supprimer',['class'=>'']) }}
            {{ Form::close()}}

      @endforeach

@stop
