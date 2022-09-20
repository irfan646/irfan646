
@extends('admin.layout.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="btn btn-outline-success btn-fw" >New Querie</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ url('queries-store') }}">
                @csrf
                <label>Phone</label>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="phone" class="form-control" placeholder="phone" />
                <label>Email</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="email" class="form-control" placeholder="email" />
                <label>Messages</label>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <input type="text" name="messages" class="form-control" placeholder="messages" />
                <button class="btn btn-info mt-4" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
