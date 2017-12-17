@extends('layouts.master')

@section('content')

<a href="{{ URL::route('posts.admin') }}">Modification</a></br>
<a href="{{ URL::route('posts.create') }}">Ajout</a></br>
<a href="{{ URL::route('posts.admin') }}">Suppression</a></br>

@stop
