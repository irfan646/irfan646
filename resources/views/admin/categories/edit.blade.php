
@extends('admin.layout.master')
@section('content')

    <div class="card">
        <div class="card-body">

    <form action="{{url('category-update', [$Categories->id])}}" method="POST">
        @method('PUT')
       @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="{{$Categories->title}}" class="form-control"   name="title" >
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
        </div>
    </div>

@endsection
