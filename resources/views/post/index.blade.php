@extends('layouts.app')
@section('content')
<div class="container">
    <div class="title m-b-md">
        @if (count($posts) > 0)
        @foreach($posts as $post)
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$post->subject}}</h3>
                </div>
                <div class="panel-body">
                    <h4>{{$post->firstname}} {{$post->lastname}}</h4>
                    <a class="text-right pull-right" href="/posts/{{$post->id}}">More</a>
                    <div class="clearfix"></div>
                    <img src="/storage/post_image/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%, hight:50%" />
                </div>
                <div class="panel-footer">
                    <span class="text-muted pull-right">{{$post->created_at->format('l Y-m-d')}}</span>
                    <span class="text-muted">By: {{$post->user->name}}</span>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="clearfix"></div>
        <div class="text-center">
        {{$posts->links()}}
        </div>
        @else
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Whoops!</strong> <a href="#" class="alert-link">No Posts here</a> return.
            </div>
        @endif
    </div>
</div>
@endsection