@extends('admin.layout.master')
@section('content')

    <a class="btn btn-outline-success btn-fw" href="{{ url('category-create') }}"> Add NewCategory</a><br><br>
    <div class="col-lg-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Categories Table</h1>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Title</th>
                            <th>Action</th>

                        </thead>
                        <tbody>
                        <tr class="table-info">

                        @foreach($Categories as $Category)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{$Category->title }}</td>

                            <td>

                                <a class="btn btn-dark btn-icon-text" href="category-edit/{{ $Category->id }}">Edit</a>
                            </td>
                                <td>
                                    <form action="{{ route('category-destroy',$Category->id) }}" method="Post"  onclick="return confirm('Are you sure?')"  class="fa fa-trash">

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>

                            </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


@endsection
