@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label>Category List</label>
                    <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary pull-right">Create</a>
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
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td width="10px"><a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-default">Show</a></td>
                                    <td width="10px"><a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-default">Edit</a></td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection