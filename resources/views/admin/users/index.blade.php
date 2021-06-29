@extends('admin.layouts.main-admin')

@section('content')
    <div class="container-fluid">
        <a href="{{route('admin.user.create')}}" class="btn btn-primary my-3">
            <span class="icon-plus" />
            Create
        </a>

        <h3>
            @if($users->count() == $users->total())
                Showing all results
            @else
                Showing {{$users->count()}} of {{$users->total()}} result(s) on page {{$users->currentPage()}}
            @endif
        </h3>
        <div class="table-responsive">
            <table class="table table-hover table-striped mt-3 table-condensed">
                <thead>
                <th></th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Actions</th>
                </thead>
                <tbody>
                @forelse($users as $record)
                    <tr>
                        <td>
                            <img class="img-thumbnail img-xs w-100 h-100" src="{{$record->imageUrl}}" alt="placehodler" />
                        </td>
                        <td>
                            <a href="{{route('admin.user.edit', $record)}}" title="Edit">
                                {{$record->first_name}} {{$record->last_name}}
                            </a>
                        </td>
                        <td>
                            <div class="embed-responsive" frameborder="0" style="max-height: 100px; overflow-y: auto">
                                {!! $record->email !!}
                            </div>
                        </td>
                        <td class="d-flex flex-grow-1">
                            <a class="btn btn-primary" href="{{route('admin.user.edit', $record)}}">
                                <span class="icon-pencil" />
                            </a>
                            <a class="btn btn-danger"
                               onclick="event.preventDefault(); document.getElementById('delete-form-{{$record->uuid}}').submit();">
                                <span class="icon-trash" />

                                {!! Form::open(['method' => 'delete', 'class' => 'hidden', 'route' => ['admin.user.destroy', $record->uuid], 'id' => "delete-form-{$record->uuid}" ])!!}
                                {!! Form::close() !!}
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100">Nothing here. Come back later</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        {!! $users->links() !!}
    </div>
@endsection
