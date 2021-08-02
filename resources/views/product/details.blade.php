@extends('layouts.main')


@section('content')
    <img src="../../images/Product-Page-Air-Control-05062b3f-5f8c-49af-b192-d0f6e61181aa.jpg" style="width: 100%">
    <!-- /.wrapsemibox start-->
    <div class="wrapsemibox shadow">
        <div class="semiboxshadow" style="padding-bottom: 10px">
            <img src="{{url('/images/shp.png')}}" class="img-fluid" alt="">
        </div>
        <!-- INTRO NOTE==================================================-->
        <section class="intro-note topspace10">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <page-product-details />
                    </div>
{{--                    <div class="col-12 col-md-4 col-lg-3">--}}
{{--                        @foreach ($categories as $category)--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="filter-category pre-filter-category active">{{ $category["name"] }}</div>--}}
{{--                                @foreach ($category["sub_categories"] as $subcategory)--}}
{{--                                    <div class="pre-filter-category"><a href="?sub_type={{$subcategory["id"]}}"  class="filter-category">{{$subcategory["name"]}}</a></div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
        <!-- /.intro-note end-->
        <!-- SERVICE BOXES==================================================-->
    </div>
    <!-- /.wrapsemibox end-->

@endsection
