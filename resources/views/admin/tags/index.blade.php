@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label>Tag List</label>
                    <a href="{{ route('tags.create') }}" class="btn btn-sm btn-primary pull-right">Create</a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th >Nombre</td>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>{{ $tag->id }}</td>
                                    <td>{{ $tag->name }}</td>
                                    <td width="10px"><a href="{{ route('tags.show', $tag->id) }}" class="btn btn-sm btn-default">Show</a></td>
                                    <td width="10px"><a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-default">Edit</a></td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $tags->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection