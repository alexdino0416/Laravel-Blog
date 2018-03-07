@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label>Post</label>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'posts.store']) !!}
                        <p><strong>Nombre:</strong> {{ $post->name }}</p>
                        <p><strong>Slug:</strong> {{ $post->slug }}</p>
                        <p><strong>Body:</strong> {{ $post->body }}</p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection