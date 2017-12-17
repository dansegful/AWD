@extends('layouts.master')

@section('content')

  {{ Form::open(['route'=>'admin.check']) }}
      <div clas="form-group">
        {{ Form::text('username','',['placeholder'=>'Username','class'=>'form-control']) }}
        @if($errors->first('username'))
            <div class="alert alert-danger">{{ $errors->first('username') }}</div>
        @endif
      </div>
    </br>
      <div class="form-group">
        {{ Form::password('password',['placeholder'=>'Password','class'=>'form-control']) }}
        @if($errors->first('password'))
            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
        @endif

      </div>
      {{ Form::submit('Se Connecter',['class'=>'btn btn-primary']) }}
  {{ Form::close() }}

@stop
