@extends('layouts.main')

@section('content')
<div style="padding: 30px">
        <h3 style="color: #00f">&nbsp;Products</h3>
        <p>
            in this section you can manage products (create, edit, delete). When you click on preview icon you will get to
            product image management for each product.
        </p>
        <div class="row justify-content-end">
        <a href="{{ route('product.show', 0) }}" class="btn btn-sm btn-primary">Create Product</a>
        </div><br/>
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
                <tr>
                    <td>2151</td>
                    <td>duct smoke detector</td>
                    <td>0-3000 fpm</td>
                    <td>the 2151 low-profile photo duct electronic smoke detector is designed to monitor and measure for the presence of smoke and is specifically intended for use in no-flow/low-flow HVAC systems.</td>
                    <td>Duct Smoke Detector</td>
                    <td>6th September 2014</td>
                    <td>13th November 2014</td>
                    <td>
                        <span class="material-icons action-icon">image</span>
                        <span class="material-icons action-icon">picture_as_pdf</span>
                        <span class="material-icons action-icon">edit_note</span>
                        <span class="material-icons action-icon">delete</span>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

@endsection
