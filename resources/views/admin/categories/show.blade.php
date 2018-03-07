@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label>Category</label>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'categories.store']) !!}
                        <p><strong>Nombre:</strong> {{ $category->name }}</p>
                        <p><strong>Slug:</strong> {{ $category->slug }}</p>
                        <p><strong>Body:</strong> {{ $category->body }}</p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection