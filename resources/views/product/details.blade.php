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
                    <div class="col-12 col-md-4 col-lg-3">
                        @foreach ($categories as $category)
                            <div class="col-12">
                                <div class="filter-category pre-filter-category active">{{ $category["name"] }}</div>
                                @foreach ($category["sub_categories"] as $subcategory)
                                    <div class="pre-filter-category"><a href="?sub_type={{$subcategory["id"]}}"  class="filter-category">{{$subcategory["name"]}}</a></div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <div class="col-12 col-md-8 col-lg-9">
                        <div >
                            <h3 style="font-size: 23px">{{$product->title}}</h3>
                        </div>
                        <div>
                            <p style="font-size: 15px">
                                {{$product->code}}<br>
                                {{$product->subtitle}}
                            </p>
                        </div>
                        <div>
                            <div class="row" >
                                <div class="col-8">
                                    <h3 style="font-size: 23px">APPLICATION</h3><br>
                                    <p style="font-size: 15px">
                                        {{$product->description}}
                                    </p>
                                </div>
                                <div class="col-4">
                                    @foreach($product->images as $images)
                                    <img src="http://{{$_SERVER["HTTP_HOST"]}}/images/{{$images->uuid}}/name/{{$images->title}}" style="width:150px">
                                    @endforeach
                                </div>
                                <div class="col-6" style="border-radius: 10px;background-color: #FBFBFB;padding: 10px;border: 1px solid #DEDEDE">

                                    @foreach ($product->resources as $resources)
                                        <div ><input type="checkbox" style="padding-right: 10px"> <a target="blank" href="http://{{$_SERVER["HTTP_HOST"]}}/{{$resources[0]->filename}}">{{$resources[0]->title}}</a></div>
                                    @endforeach
                                </div>
                            </div>
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
