@extends('admin.layout.master')
@section('content')

    <div class="card">
        <div class="card-body">
            <h1 class="btn btn-outline-success btn-fw" >New Education</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ url('education-store') }}">
                @csrf
                <label>Course</label>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="course" class="form-control" placeholder="course" />
                <label>Description</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="description" class="form-control" placeholder="description" />
                <label>School</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="school" class="form-control" placeholder="school" />
                <label>Starting_Date</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="starting_date" class="form-control" placeholder="starting_date" />
                <label>End_Date</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="end_date" class="form-control" placeholder="end_date" />
                <button class="btn btn-info mt-4" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
