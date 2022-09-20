@extends('admin.layout.master')
@section('content')

    <a class="btn btn-outline-success btn-fw" href="{{ url('education-create') }}"> Add NewEducation</a><br><br>
    <div class="col-lg-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Skill Table</h1>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Course</th>
                        <th>School</th>
                        <th>Description</th>
                        <th>Start_Date</th>
                        <th>End_Date</th>
                        <th colspan="2">Action</th>

                    </thead>
                    <tbody>
                    <tr class="table-info">

                    @foreach($Education as $Education)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{$Education->course }}</td>
                            <td>{{$Education->description}}</td>
                            <td>{{$Education->school}}</td>
                            <td>{{$Education->starting_date}}</td>
                            <td>{{$Education->end_date}}</td>

                            <td>
                                <a class="btn btn-dark btn-icon-text" href="education-edit/{{ $Education->id }}">Edit</a>
                            </td>
                            <td>

                                <form action="{{ route('education-destroy', $Education->id) }}" method="post" method="Post"  onclick="return confirm('Are you sure?')"  class="fa fa-trash">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
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
