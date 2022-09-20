@extends('admin.layout.master')
@section('content')
    <div class="card">
        <div class="card-body">

            <form method="post" action="{{url('skills-update', [$Skills->id])}}">
                @method('PUT')
                @csrf
                <label>Title</label>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="title" class="form-control" value="{{$Skills->title}}" />
                <label>Description</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="description" class="form-control" value="{{$Skills->description}}" />
                <button class="btn btn-info mt-4" type="submit">Update</button>
            </form>
        </div>
    </div>
@endsection
