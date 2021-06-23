<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pottorff') }}</title>

    @livewireStyles

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Styles -->
    @yield('skel_styles')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @livewireScripts
</head>

<body class="off">

    <div id="pottorffApp">
        @yield('skel_content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    {{-- File Upload --}}
    <script>
        $(document).on('change', '.file-input', function() {
            if (typeof(FileReader) != "undefined") {
                var dvPreview = $("#userLogoPreview");
                dvPreview.html("");
                $($(this)[0].files).each(function() {
                    var file = $(this);
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var img = $("<img />");
                        img.attr("class", "img-thumbnail img-xs w-100 h-100");
                        img.attr("style", "");
                        img.attr("src", e.target.result);
                        dvPreview.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                });
            } else {
                alert("This browser does not support HTML5 FileReader.");
            }
        });
    </script>
    @yield('skel_scripts')
</body>

</html>
