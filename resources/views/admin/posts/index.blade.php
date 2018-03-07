@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label>My posts List</label>
                    <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary pull-right">Create</a>
                </div>
                <div class="panel-body">
                    @if (count($posts))
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th >Nombre</td>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->name }}</td>
                                        <td width="10px"><a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-default">Show</a></td>
                                        <td width="10px"><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-default">Edit</a></td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    @else
                        <p>You have no posts! <strong>:(</strong></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection