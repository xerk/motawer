@extends('layouts.app')
@section('content')
<div class="container">
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
    <fieldset>
        <legend>Edit a Post</legend>
            <div class="form-group">
                {{Form::label('subject', 'Subject',['class'=>'col-lg-2 control-label '])}}
                <div class="col-lg-9">
                {{Form::text('subject', $post->subject, ['class'=>'form-control', 'placeholder'=>'Type your subject name...'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('firstname', 'First Name',['class'=>'col-lg-2 control-label'])}}
                <div class="col-lg-4">
                {{Form::text('firstname', $post->firstname, ['class'=>'form-control', 'placeholder'=>'Type your frst name...'])}}
                </div>
                {{Form::label('lastname', 'First Name',['class'=>'col-lg-1 control-label'])}}
                <div class="col-lg-4">
                {{Form::text('lastname', $post->lastname, ['class'=>'form-control', 'placeholder'=>'Type your last name...'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('lastname', 'Choos file',['class'=>'col-lg-2 control-label'])}}
                <div class="col-lg-9">
                {{Form::file('post_image', ['class'=>'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('body', 'Write a Post',['class'=>'col-lg-2 control-label '])}}
                <div class="col-lg-9">
                {{Form::textarea('body', $post->body, ['size'=>'30x3','class'=>'form-control','id'=>'article-ckeditor', 'placeholder'=>'What\'s on your mind?'])}}
                </div>
            </div>
            <div class="col-lg-9 col-lg-offset-2 text-right">
            {{Form::reset('Clear', ['class'=>'btn btn-default btn-lg'])}}
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Edit', ['class'=>'btn btn-primary btn-lg'])}}
            </div>
        </fieldset>
        {!! Form::close() !!}
    </div>
    
@endsection