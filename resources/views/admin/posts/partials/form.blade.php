{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="form-group">
    {{ Form::label('category_id', 'Category') }}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Pick a category']) }}
</div>
<div class="form-group">
    {{ Form::label('name', 'Post Title') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'Friendly URL') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('excerpt', 'Excerpt') }}
    {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Description') }}
    {{ Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body']) }}
</div>
<div class="form-group">
    {{ Form::label('file', 'Image') }}
    {{ Form::file('file') }}
</div>
<div class="form-group">
    {{ Form::label('tags', 'Tags') }}
    <div>
        @foreach ($tags as $tag)
            <label>
                {{ Form::checkbox('tags[]', $tag->id) }} {{$tag->name}}
            </label>
        @endforeach
    </div>
</div>
<div class="form-group">
    {{ Form::label('status', 'Status') }}
    <div>
        <label>
            {{ Form::radio('status', 'PUBLISHED', ['class' => 'form-control']) }} Published
        </label>
        <label>
            {{ Form::radio('status', 'DRAFT', ['class' => 'form-control']) }} Draft
        </label>
    </div>
</div>
<div class="form-group">
    {{ Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
    <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#name, #slug').stringToSlug({
                callback: function (text){
                    $('#slug').val(text);
                }
            });
        });

        // CkEditor4 Config
        CKEDITOR.config.height = 400;
        CKEDITOR.config.width = 'auto';
        CKEDITOR.replace('body');

    </script>
@endsection