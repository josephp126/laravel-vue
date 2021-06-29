@extends('admin.layouts.main-admin')

@section('content')
    <div class="container mt-3">
        <example-component></example-component>
    </div>
@endsection

@section('scripts')
    <script>
        const toggler = document.getElementsByClassName('caret');
        let i;

        for (i = 0; i < toggler.length; i++) {
            toggler[i].addEventListener('click', function () {
                this.parentElement.querySelector('.nested').classList.toggle('active');
                this.classList.toggle('caret-down');
            });
        }
    </script>
@endsection
