@extends('layouts.main')


@section('content')
    <livewire:product-banner />

    <!-- /.wrapsemibox start-->
    <div class="wrapsemibox shadow">
        <div class="semiboxshadow" style="padding-bottom: 10px">
            <img src="{{url('/images/shp.png')}}" class="img-fluid" alt="">
        </div>
        <!-- INTRO NOTE==================================================-->

        <section class="intro-note topspace10">

            <div class="container">
                <page-product category_id="{{$category_id}}" subcategory_id="{{$subcategory_id}}">
            </div>
        </section>

        <!-- /.intro-note end-->
        <!-- SERVICE BOXES==================================================-->
    </div>
    <!-- /.wrapsemibox end-->
@endsection
