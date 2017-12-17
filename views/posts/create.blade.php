@extends('layouts.master')

@section('content')

<h2>Ajouter nouveau jeux</h2>

{{ Form::open(['route'=>['posts.create',0],'method'=>'post']) }}

<div class="form-group">
    {{ Form::label('name','Nom :') }}
    {{ Form::text('name','',['class'=>'form-control']) }}
    @if($errors->first('name'))
      <p style="color:#CD3F3F"  >{{ $errors->first('name') }}</p>
    @endif
</div>
<div class="form-group">
  {{ Form::label('content','Link vers image :') }}
  {{ Form::text('content','',['class'=>'form-control']) }}
  @if($errors->first('content'))
      <p style="color:#CD3F3F"  >{{ $errors->first('content') }}</p>
  @endif
</div>

  {{ Form::submit('Envoyer',['class'=>'btn btn-primary']) }}

{{ Form::close() }}

@stop
