@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label>Tag</label>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'tags.store']) !!}
                        <p><strong>Nombre:</strong> {{ $tag->name }}</p>
                        <p><strong>Slug:</strong> {{ $tag->slug }}</p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection