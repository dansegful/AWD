@extends('layouts.master')

@section('content')

{{ Form::open(['route'=>['posts.update',$post->id],'method'=>'post']) }}

<div class="form-group">
    {{ Form::label('name','Nom :') }}
    {{ Form::text('name',$post->name,['class'=>'form-control']) }}
    @if($errors->first('name'))
      <p style="color:#CD3F3F"  >{{ $errors->first('name') }}</p>
    @endif
</div>
<div class="form-group">
  {{ Form::label('content','link vers image :') }}
  {{ Form::text('content',$post->content,['class'=>'form-control']) }}
  @if($errors->first('content'))
      <p style="color:#CD3F3F"  >{{ $errors->first('content') }}</p>
<form action="/action_page.php">
  <input type="file" name="pic" accept="image/*">
  <input type="submit">
</form>
  @endif
</div>

  {{ Form::submit('Envoyer',['class'=>'btn btn-primary']) }}

{{ Form::close() }}

@stop
