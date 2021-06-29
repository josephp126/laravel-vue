@extends('layouts.main')

@section('content')
    <div style="padding: 30px">
        <h3 style="color: #00f">&nbsp;&nbsp;Update</h3>
        <div class="row justify-content-end">
            <button class="btn btn-sm btn-primary">Product Resources</button>
            <button class="btn btn-sm btn-primary" style="margin-left: 20px;">Product Images</button>
            </div><br/>
        <form style="padding: 30px" action="{{ route('product.update', $product || 0) }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                {!! Form::text('name', $product ? $product->name : '', ['class' => 'col-sm-10 form-control', 'id' => 'name', 'required' => true]) !!}
            </div>
            <div class="form-group row">
                <label for="place" class="col-sm-2 col-form-label">Place</label>
                {!! Form::text('place', $product ? $product->place : '', ['class' => 'col-sm-10 form-control', 'id' => 'place', 'required' => true]) !!}
            </div>
            <div class="form-group row">
                <label for="contractor" class="col-sm-2 col-form-label">Contractor</label>
                {!! Form::text('contractor', $product ? $product->contractor : '', ['class' => 'col-sm-10 form-control', 'id' => 'contractor', 'required' => true]) !!}
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10" style="padding:0px">
                {!! Form::textarea('description', $product ? $product->description : '', ['class' => '', 'id' => 'description']) !!}
                </div>
            </div>
            <div class="custom-control custom-checkbox">
                {!! Form::checkbox('active', '1', $product && $product->active, ['class' => 'custom-control-input', 'id' => 'active']) !!}
                <label class="custom-control-label" for="active">Active product</label>
            </div>
            <div class="row justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.tiny.cloud/1/u6f8hbc07opxmc7whwqp30zytz25780ps01abpyd0khlrey9/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#description',
            plugins: 'advcode casechange formatpainter linkchecker autolink link lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinymcespellchecker',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist checklist outdent indent | removeformat table code',
            height: 300,
            width:"100%",
        });
    </script>
@endsection
