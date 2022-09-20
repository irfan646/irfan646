
@extends('admin.layout.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="btn btn-outline-success btn-fw" >New Category</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form method="post" action="{{ url('category-store') }}">
                    @csrf
                    <label>Title</label>

                @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <input type="text" name="title" class="form-control" placeholder="title" />
                    <button class="btn btn-info mt-4" type="submit">Submit</button>
                </form>
            </div>
        </div>
@endsection
