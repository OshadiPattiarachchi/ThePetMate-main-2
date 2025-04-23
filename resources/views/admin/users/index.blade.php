@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Manage Users</h1>
        @foreach($users as $user)
            <div>
                <p>{{ $user->name }} ({{ $user->role }})</p>
                <form action="{{ route('admin.deleteUser', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
