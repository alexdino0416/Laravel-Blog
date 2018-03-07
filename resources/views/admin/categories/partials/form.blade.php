<div class="form-group">
    {{ Form::label('name', 'Category Name') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'Friendly URL') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Description') }}
    {{ Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body']) }}
</div>
<div class="form-group">
    {{ Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
    <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#name, #slug').stringToSlug({
                callback: function (text){
                    $('#slug').val(text);
                }
            });
        });
    </script>
@endsection