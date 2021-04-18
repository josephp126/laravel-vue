@extends('layouts.main-admin')

@section('content')
    <div class="container">
        <a href="{{route('admin.news.create')}}" class="btn btn-primary my-3">
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
        <table class="table table-hover table-striped mt-3">
            <thead>
            <th></th>
            <th>Title</th>
            <th>Summary</th>
            <th>Body</th>
            <th>Last Saved</th>
            <th class="text-center">Stared</th>
            <th></th>
            </thead>
            <tbody>
            @forelse($data as $record)
                <tr>
                    <td>
                        <img class="img-thumbnail img-sm" src="{{$record->imageUrl}}" alt="placehodler" />
                    </td>
                    <td>
                        <a href="{{route('admin.news.edit', $record)}}" title="Edit">
                            {{$record->title}}
                        </a>
                    </td>
                    <td>{!! Str::limit($record->summary, 100) !!}</td>
                    <td>{!! Str::limit($record->content, 100) !!}</td>
                    <td>{{$record->updated_at->format('m/d/Y @ h:m A')}}</td>
                    <td class="text-center">
                        <a onclick="event.preventDefault(); document.getElementById('update-form-{{$record->uuid}}').submit();">
                            <span class="icon-2x icon-star{{$record->is_homepage? '': '-empty'}}" />
                        </a>
                        {!! Form::open(['method' => 'put', 'class' => 'hidden', 'route' => ['admin.news.star', $record->uuid], 'id' => "update-form-{$record->uuid}" ])!!}
                        <input type="hidden" name="action" value="star" />
                        {!! Form::close() !!}
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.news.edit', $record)}}">
                            <span class="icon-pencil" />
                        </a>
                        <a class="btn btn-danger"
                           onclick="event.preventDefault(); document.getElementById('delete-form-{{$record->uuid}}').submit();">
                            <span class="icon-trash" />
                        </a>
                        {!! Form::open(['method' => 'delete', 'class' => 'hidden', 'route' => ['admin.news.destroy', $record->uuid], 'id' => "delete-form-{$record->uuid}" ])!!}

                        {!! Form::close() !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nothing here. Come back later</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        {!! $data->links() !!}
    </div>
@endsection
