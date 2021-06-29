<div class="row">
    <div class="col-md-6">
            {!! Form::basicInput('title', null, ['label' => 'Title', 'required' => true]) !!}
    </div>
    <div class="col-md-6">
        {!! Form::basicInput('file', null, ['label' => 'File', 'type' => 'file']) !!}
    </div>
    <div class="col-md-12">
        {!! Form::editor('summary', null, ['label' => 'Summary (this is the small description) try to keep it less then 100 characters.']) !!}
    </div>
    <div class="col-md-12">
        {!! Form::editor('content', null, ['label' => 'Content']) !!}
    </div>
</div>
