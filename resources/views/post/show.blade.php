@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="container">
        <div class="title m-b-md">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <span class="panel-title">{{$post->subject}}</span>
                        @if (Auth::user() && Auth::user()->id == $post->user_id)
                        <a class="pull-right" style="color:#fff" href="/posts/{{$post->id}}/edit">Edit</a>
                        @endif
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <h4>{{$post->firstname}} {{$post->lastname}}</h4>
                        <span>{!!$post->body!!}</span>
                        <img src="/storage/post_image/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%, hight:50%" />
                        @if (Auth::user() && Auth::user()->id == $post->user_id)
                        {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method'=>'POST', 'class'=>'form-horizontal']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class'=>'btn-link'])}}
                        {!! Form::close() !!}
                        @endif
                    </div>
                    <div class="panel-footer">
                        <span class="text-muted pull-right">{{$post->created_at->format('l Y-m-d')}}</span>
                        <span class="text-muted">By: {{$post->user->name}}</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pull-right">
                <a class="btn btn-primary btn-flat" href="{{ URL::to( 'posts/' . $previous ) }}">Previous</a>
                <a class="btn btn-primary btn-flat" href="{{ URL::to( 'posts/' . $next ) }}">Next</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection