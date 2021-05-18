@extends('admin.layouts.main-admin')

@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" onclick="selectFile()"> Add New Image</button>
    <form class="modal-footer" action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input hidden type="file" id="file" name="file[]"
            onchange="this.files.length > 0 ? this.parentElement.submit() : ''" multiple="true" accept="image/*">
    </form>


    <div class="row">
        @foreach ($sliders as $index => $item)
            <div class="col-md-3">
                <img src="{{ $item->path }}" style="width:100%;">
                <div class="row"
                    style="position:absolute; top:-5px; right:10px; border-radius:10%; background:#ffffffab; padding:10px">
                    <form class="col" action="{{ route('admin.slider.destroy', $item) }}" method="post">
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
@section('scripts')
    <script>
        const selectFile = () => $("#file").click()
    </script>
@endsection
