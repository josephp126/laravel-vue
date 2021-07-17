@extends('admin.layouts.main-admin')

{{--@section('pageTitle', _PAGE_TITLE_ )--}}

{{--@section('breadcrumbs')--}}
{{--    <a href="{{route('MODEL.index')}}" class="text-dark">_LINK_NAME_</a> / _PAGE_TITLE_ --}}
{{--@endsection--}}

@section('content')
    <div class="wrapsemibox">
        <div class="content mt-5 p-3">
            <div class="container-fluid">
                <h3 class="text-primary">&nbsp;Products</h3>
                <p>
                    in this section you can manage products (create, edit, delete). When you click on preview icon you will get
                    to
                    product image management for each product.
                </p>
                <div class="row justify-content-end">
                    <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-primary">Create Product</a>
                </div>
                <br />
                <table class="table table-bordered table-hover table-sm product-table">
                    <thead class="thead-dark">
                    <tr>
                        <th>Title</th>
                        <th style="width:100px">Short Info 1</th>
                        <th style="width:100px">Short Info 2</th>
                        <th>Description</th>
                        <th style="width:100px">Category</th>
                        <th style="width:120px">Date Created</th>
                        <th style="width:120px">Date Updated</th>
                        <th style="width:100px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->code}}</td>
                            <td>{{$product->subtitle}}</td>
                            <td>{!!$product->description!!}</td>
                            <td>
                                <ul class="list-unstyled">
                                    <li>{!! implode('</li><li>', $product->categories->pluck('name')->toArray()) !!}</li>
                                </ul>
                            </td>
                            <td>{{$product->created_at->format(config('app.formats.table_datetime'))}}</td>
                            <td>{{$product->updated_at->format(config('app.formats.table_datetime'))}}</td>
                            <td>
                                <div class="dropdown open">
                                    <button class="btn btn-{{$product->active? 'secondary': 'primary'}} dropdown-toggle"
                                            type="button"
                                            id="buttonDropdown-{{$product->id . '-' . $product->active}}"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu"
                                         aria-labelledby="buttonDropdown-{{$product->id . '-' . $product->active}}">
                                        <a href="{{route('admin.product.edit', $product)}}" class="dropdown-item">Edit</a>
                                        <a href="{{route('admin.product.active.toggle', $product)}}" class="dropdown-item text-danger">{{$product->active? '': 'De '}}Activate</a>
                                        <a href="{{route('admin.product.image.index', $product)}}" class="dropdown-item">Manage Images</a>
                                        <a href="#" class="dropdown-item">Manage Resources</a>
                                        <a href="#" class="dropdown-item">Edit Note</a>
                                        <a href="#" class="dropdown-item text-danger" onclick="document.getElementById('{{"product-delete-{$product->id}"}}').submit()">Delete</a>
                                        {!! Form::open(['id' => "product-delete-{$product->id}", 'class' => 'd-none', 'method' => 'delete', 'route' => ['admin.product.destroy', $product]]) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100">
                                No products
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div class="container">
                    {!! $products->links() !!}
                </div>
            </div>

        </div>
    </div>
@endsection
