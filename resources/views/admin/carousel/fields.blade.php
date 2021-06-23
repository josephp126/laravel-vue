<div class="row">
    <div class="col-md-12">
        {!! Form::basicInput('name', null, ['label' => 'Name', 'required' => true]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {!! Form::basicInput('height_lg', null, ['label' => 'Height LG defaults to ' . config('carousel.heights.lg'), 'placeholder' => config('carousel.heights.lg')]) !!}
    </div>
    <div class="col-md-12">
        {!! Form::basicInput('height_md', null, ['label' => 'Height MD defaults to ' . config('carousel.heights.md'), 'placeholder' => config('carousel.heights.md')]) !!}
    </div>
    <div class="col-md-12">
        {!! Form::basicInput('height_sm', null, ['label' => 'Height SM defaults to ' . config('carousel.heights.sm'), 'placeholder' => config('carousel.heights.sm')]) !!}
    </div>
</div>
