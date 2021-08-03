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
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        @foreach ($categories as $category)
                            <div class="col-12">
                                <div class="filter-category pre-filter-category active">{{ $category["name"] }}</div>
                                @foreach ($category["sub_categories"] as $subcategory)
                                    <div class="pre-filter-category"><a href="?sub_type={{$subcategory["id"]}}" class="filter-category">{{$subcategory["name"]}}</a></div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="row">
                            @foreach ($categoryShow as $show)
                                @if(isset($show->name))
                                    <div class="col-12 col-sm-6 col-lg-4 mt-2">
                                        <div class="product-top-title">
                                            {{$show->name }}
                                        </div>
                                        <div class="product-box">
                                            <img src="{{$show->img}}" style="width: 100%;">
                                            <div style="padding: 5px 10px">
                                                @foreach ($show->products as $product)
                                                    <div class="feature-item">
                                                        <a href="product/details/{{$product["id"]}}"><span style="color:#2D9BB7">{{$product["title"]}}</span></a>
                                                        <i>{{$product["more_info"] }}</i>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.intro-note end-->
        <!-- SERVICE BOXES==================================================-->
    </div>
    <!-- /.wrapsemibox end-->

@endsection
