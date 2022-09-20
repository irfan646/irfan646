@extends('admin.layout.master')
@section('content')

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{url('education-update', [$Education->id])}}">
                @method('PUT')
                @csrf
                <label>Course</label>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="course" class="form-control" value="{{$Education->course}}" />
                <label>Description</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="description" class="form-control" value="{{$Education->description}}" />
                <label>School</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="school" class="form-control" value="{{$Education->school}}" />
                <label>Starting_Date</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="starting_date" class="form-control" value="{{$Education->starting_date}}" />
                <label>End_Date</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="end_date" class="form-control" value="{{$Education->end_date}}" />
                <button class="btn btn-info mt-4" type="submit">Update</button>
            </form>
        </div>
    </div>
@endsection
