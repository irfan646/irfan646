
@extends('admin.layout.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{url('queries-update', [$Queries->id])}}">
                @method('PUT')
                @csrf
                <label>Phone</label>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="phone" class="form-control" value="{{$Queries->phone}}" />
                <label>Email</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="email" class="form-control" value="{{$Queries->email}}" />
                <label>Messages</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="messages" class="form-control" value="{{$Queries->messages}}" />
                <button class="btn btn-info mt-4" type="submit">Update</button>
            </form>
        </div>
    </div>
@endsection
