<!-- recall html/style page -->
@extends('layouts.layout-bootstrap')

<!-- define content section with logic -->
@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(count($photos) == 0)

<h1 class="text-center">No photos uploaded...</h1>

@else

<table class="table table-striped table-hover">

    <thead>
        <tr class="row">
            <th>ID</th>
            <th>TITLE</th>
            <th>URL</th>
            <th>PREVIEW</th>
            <th>ACTION</th>
            <th>ACTION</th>
            <th>ACTION</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($photos as $photo)

        <tr class="row">
            <td>{{$photo->id}}</td>
            <td>{{$photo->title}}</td>
            <td>{{$photo->url}}</td>

            <td><img class="photo-preview" src="{{$photo->url}}" alt="" srcset=""
                    style="width:100px;height:100px;object-fit:cover;">
            </td>

            <td>
                <a class="btn btn-success" href="{{ route('photos.show', ['photo' => $photo->id]) }}">DETAILS</a>
            </td>

            <td>
                <a class="btn btn-warning" href="{{ route('photos.edit', ['photo' => $photo->id]) }}">EDIT</a>
            </td>

            <td>
                <!-- <a class="btn btn-danger" href="{{ route('photos.destroy', ['photo' => $photo->id]) }}">DELETE</a> -->
                <form method='POST' action="{{ route('photos.destroy', ['photo' => $photo->id]) }}">
                    @csrf
                    @method('DELETE')

                    <input class="btn btn-danger" type="submit" value="DELETE">
                </form>
            </td>

        </tr>

        @endforeach

    </tbody>
</table>

@endif

@endsection