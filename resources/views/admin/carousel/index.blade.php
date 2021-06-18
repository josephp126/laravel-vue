@extends('admin.layouts.main-admin')

@section('content')
    <div class="container-fluid">
        <a href="{{route('admin.carousel.create')}}" class="btn btn-primary my-3">
            <span class="icon-plus" />
            Create
        </a>

        <h3>
            @if($data->count() == $data->total())
                Showing all results
            @else
                Showing {{$data->count()}} of {{$data->total()}} result(s) on page {{$data->currentPage()}}
            @endif
        </h3>
        <div class="table-responsive">
            <table class="table table-hover table-striped mt-3 table-condensed">
                <thead>
                <th>Slug</th>
                <th>Name</th>
                <th>Slide Count</th>
                <th>Last Saved</th>
                <th></th>
                </thead>
                <tbody>
                @forelse($data as $record)
                    <tr>
                        <td>
                            <a href="{{route('admin.carousel.show', $record)}}" title="Edit">
                                {{$record->slug}}
                            </a>
                        </td>
                        <td>
                            <div class="embed-responsive" frameborder="0" style="max-height: 100px; overflow-y: auto">
                                {{$record->name}}
                            </div>
                        </td>
                        <td>
                            <div class="embed-responsive" frameborder="0" style="max-height: 100px; overflow-y: auto">
                                {{$record->slides->count()}}
                            </div>
                        </td>
                        <td>{{$record->updated_at->format('m/d/Y @ h:m A')}}</td>

                        <td class="d-flex flex-grow-1">
                            <a class="btn btn-primary" href="{{route('admin.carousel.show', $record)}}">
                                <span class="icon-eye-open" />
                            </a>
                            <a class="btn btn-secondary" href="{{route('admin.carousel.edit', $record)}}">
                                <span class="icon-pencil" />
                            </a>
                            <a class="btn btn-danger"
                               onclick="event.preventDefault(); document.getElementById('delete-form-{{$record->id}}').submit();">
                                <span class="icon-trash" />

                                {!! Form::open(['method' => 'delete', 'class' => 'hidden', 'route' => ['admin.carousel.destroy', $record], 'id' => "delete-form-{$record->id}" ])!!}
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

        {!! $data->links() !!}
    </div>
@endsection
