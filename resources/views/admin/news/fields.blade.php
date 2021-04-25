<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <div class="form-group">
                <label for="title">Title</label>
                {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'required' => true]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="file">File</label>
            {!! Form::file('file', null, ['class' => 'form-control', 'id' => 'file', 'required' => false]) !!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="summary">Summary</label>
            {!! Form::textarea('summary', null, ['class' => 'form-control', 'id' => 'summary', 'required' => true]) !!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="content">Content</label>
            {!! Form::textarea('content', null, ['class' => 'form-control tinymce', 'id' => 'content']) !!}
        </div>
    </div>
</div>
