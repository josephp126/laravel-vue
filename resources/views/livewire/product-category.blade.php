<div>
    <div id="product-category" role="tablist" aria-multiselectable="true" wire:sortable="updateTaskOrder">
        @foreach($categories as $category)
            <div class="card" wire:sortable.item="{{ $category->id }}" wire:key="task-{{ $category->id }}">
                <div class="card-header bg-dark p-0" role="tab" id="section{{$category->id}}HeaderId">
                    <h5 class="mb-0">
                        <ul class="nav text-white bg-dark d-flex">
                            <li class="nav-item w-25 col">
                                <a data-toggle="collapse"
                                   wire:sortable.handle
                                   data-parent="#product-category"
                                   href="#section{{$category->id}}ContentId"
                                   class="nav-link"
                                   aria-expanded="true"
                                   aria-controls="section{{$category->id}}ContentId">
                                    {{$category->name}}
                                </a>
                            </li>
                            <li class="nav-item bg-primary col-md-auto">
                                <a class="nav-link" href="#">Add Subcategory</a>
                            </li>
                            <li class="nav-item bg-secondary col-md-auto">
                                <a class="nav-link" href="#">Edit</a>
                            </li>
                            <li class="nav-item bg-danger col-md-auto">
                                <a class="nav-link" href="#">Delete</a>
                            </li>
                        </ul>
                    </h5>
                </div>
                <div id="section{{$category->id}}ContentId"
                     class="collapse {{$category->parent_id === null? 'show': 'in'}}" role="tabpanel"
                     aria-labelledby="section{{$category->id}}HeaderId">
                    <div class="card-body pr-0">

                        <livewire:product-category :categories="$category->children"></livewire:product-category>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
