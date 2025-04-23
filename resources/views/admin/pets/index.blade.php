@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Manage Pets</h1>
        @foreach($pets as $pet)
            <div>
                <p>{{ $pet->name }} ({{ $pet->type }})</p>
                <form action="{{ route('admin.deletePet', $pet->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
