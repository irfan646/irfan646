@extends('admin.layout.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('reviews-update', [$Reviews->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <label>Title</label>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="title" class="form-control" placeholder="title" value="{{$Reviews->title}}" />
                <label>Description</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="description" class="form-control" placeholder="description"  value="{{$Reviews->description}}"/>
                <label>Image:</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="file" name="image" class="form-control" placeholder="image" value="{{$Reviews->image}}">
                <button class="btn btn-info mt-4" type="submit">Update</button>
            </form>
        </div>
    </div>
@endsection
