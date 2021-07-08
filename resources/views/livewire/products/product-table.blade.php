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
        @forelse($products as $row_inc => $product)
            <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->code}}</td>
                <td>{{$product->subtitle}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <ul class="list-unstyled">
                        <li>{!! implode('</li><li>', $product->categories->pluck('name')->toArray()) !!}</li>
                    </ul>
                </td>
                <td>{{$product->created_at->format(config('app.formats.table_datetime'))}}</td>
                <td>{{$product->updated_at->format(config('app.formats.table_datetime'))}}</td>
                <td>
                    <div class="dropdown open">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="buttonDropdown-{{$row_inc}}"
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            Actions
                        </button>
                        <div class="dropdown-menu" aria-labelledby="buttonDropdown-{{$row_inc}}">
                            <a href="#" class="dropdown-item">Manage Images</a>
                            <a href="#" class="dropdown-item">Picture as Pdf</a>
                            <a href="#" class="dropdown-item">Edit Note</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
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

</div>
