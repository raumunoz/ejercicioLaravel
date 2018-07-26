@extends('layouts.app')
@section('content')
<h1>Edit post</h1><!--manda a el controllador posto y ala funcion store-->
{!! Form::open(["action" => ["PostoController@update",$post->id], "method" => "POST", "class" => "form"]) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class' => 'form-control','placeholder' => 'title'])}}
    </div>
    <div class="form-group">
            {{Form::label('body','Body')}}
            {{ Form::textarea('body',$post->body, ['class' => 'form-control','id'=>'article-ckeditor', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
    {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
        
