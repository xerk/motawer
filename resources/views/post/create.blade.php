@extends('layouts.app')
@section('content')
<div class="container">
    {!! Form::open(['action' => 'PostController@store', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
    <fieldset>
        <legend>Write a Post</legend>
            <div class="form-group">
                {{Form::label('subject', 'Subject',['class'=>'col-lg-2 control-label '])}}
                <div class="col-lg-9">
                {{Form::text('subject', '', ['class'=>'form-control', 'placeholder'=>'Type your subject name...'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('firstname', 'First Name',['class'=>'col-lg-2 control-label'])}}
                <div class="col-lg-4">
                {{Form::text('firstname', '', ['class'=>'form-control', 'placeholder'=>'Type your frst name...'])}}
                </div>
                {{Form::label('lastname', 'Last Name',['class'=>'col-lg-1 control-label'])}}
                <div class="col-lg-4">
                {{Form::text('lastname', '', ['class'=>'form-control', 'placeholder'=>'Type your last name...'])}}
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
                {{Form::textarea('body', null, ['size'=>'30x3','class'=>'form-control','id'=>'article-ckeditor', 'placeholder'=>'What\'s on your mind?'])}}
                </div>
            </div>
            <div class="col-lg-9 col-lg-offset-2 text-right">
            {{Form::reset('Clear', ['class'=>'btn btn-default btn-lg'])}}
            {{Form::submit('Post', ['class'=>'btn btn-primary btn-lg'])}}
            </div>
        </fieldset>
        {!! Form::close() !!}
    </div>
    
@endsection