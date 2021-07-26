@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<div class="row">
    <div class="col">
        {!! Form::basicCheckbox('active', null, ['label' => 'Active product', 'required' => false]) !!}
        {!! Form::basicInput('title', null, ['label' => 'Name', 'required' => true]) !!}
        {!! Form::basicInput('code', null, ['label' => 'Code', 'required' => true]) !!}
        {!! Form::basicInput('subtitle', null, ['label' => 'Place', 'required' => true]) !!}
        {!! Form::basicInput('more_info', null, ['label' => 'Contractor', 'required' => true]) !!}
        {!! Form::basicSelect('categories[]', \App\Models\Category::ordered()->get()->pluck('name', 'id'), null, ['label' => 'Categories', 'multiple' => true, 'height' => '50']) !!}
        {!! Form::basicInput('description', null, ['label' => 'Description']) !!}
{{--        {!! Form::editor('description', null, ['label' => 'Description']) !!}--}}
    </div>
</div>

@include('partials.form-buttons')
