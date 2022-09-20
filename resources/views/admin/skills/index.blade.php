@extends('admin.layout.master')
@section('content')


    <a class="btn btn-outline-success btn-fw" href="{{ url('skill-create') }}"> Add NewSkill</a><br><br>
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
                        <th>Title</th>
                        <th>Description</th>
                        <th colspan="2">Action</th>

                    </thead>
                    <tbody>
                    <tr class="table-info">

                    @foreach($Skills as $Skill)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{$Skill->title }}</td>
                            <td>{{$Skill->description}}</td>

                            <td>
                                <a class="btn btn-dark btn-icon-text" href="skills-edit/{{ $Skill->id }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('skills-destroy', $Skill->id) }}" method="post" method="Post"  onclick="return confirm('Are you sure?')"  class="fa fa-trash">
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


