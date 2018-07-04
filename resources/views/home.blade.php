@extends('layouts.app')
@section('content')
<div class="container">
{{--  
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>  --}}

@foreach($posts as $post)
<div class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">{{$post->subject}}</h3>
            <a class="pull-right" style="color:#fff" href="/posts/{{$post->id}}/edit">Edit</a>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <h4>{{$post->firstname}} {{$post->lastname}}</h4>
            <span>{!!$post->body!!}</span>
            <img src="/storage/post_image/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%, hight:50%" />
            <span class="text-muted pull-right">{{$post->created_at->format('l Y-m-d')}}</span>
            {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method'=>'POST', 'class'=>'form-horizontal']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn-link'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endforeach
</div>
@endsection
