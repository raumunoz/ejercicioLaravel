@extends('layouts.app')
@section('content')
<h1>CREATE</h1><!--manda a el controllador posto y ala funcion store-->
{!! Form::open(["action" => "PostoController@store", "method" => "POST", "class" => "form"]) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class' => 'form-control','placeholder' => 'title'])}}
    </div>
    <div class="form-group">
            {{Form::label('body','Body')}}
            {{ Form::textarea('body','', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
        

