@extends('admin.layouts.main-admin')

@section('title', 'PROJECTS AND CASE STUDIES');

@section('content')
    <label class="btn btn-primary" for="file" style="cursor: pointer"> Add New Image</label>

    <form class="modal-footer" action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input hidden type="file" id="file" name="file[]"
               onchange="this.files.length > 0 ? this.parentElement.submit() : ''" multiple="true" accept="image/*">
    </form>


    <div class="row">
        @foreach ($sliders as $slide)
            <div class="col-md-3">
                {!! Form::model($slide, ['method' => 'put', 'route' => ['admin.slider.update', $slide]]) !!}
                <div class="d-flex flex-column justify-content-end" style="gap: 10px;">
                    <div class="col">
                        <img src="{{ $slide->image->url ?? '/images/broken.png' }}"
                             style="height: 100px; margin: 0 auto;" alt="slide">
                    </div>
                    <div class="col mb-auto">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="title">Title</label>
                                {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'required' => true]) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="title">Description</label>
                                {!! Form::text('description', null, ['class' => 'form-control', 'id' => 'title', 'required' => true]) !!}
                            </div>
                        </div>
                    </div>
                    @include('partials.form-buttons')
                </div>
                {!! Form::close() !!}
                <div class="row"
                     style="position:absolute; top:-5px; right:10px; border-radius:10%; background:#ffffffab; padding:10px">
                    <form class="col" action="{{ route('admin.slider.destroy', $slide) }}" method="post">
                        @csrf
                        @method('delete')
                        <a rel="tooltip" data-original-title="Delete" title="Delete"
                           onclick="confirm('{{ __('Are you sure you want to delete this slider image?') }}') ? this.parentElement.submit() : ''"
                           style="cursor:pointer; color:#000"><i class="material-icons">close</i></a>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
