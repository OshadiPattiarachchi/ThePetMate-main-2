@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Pet Profile</h2>

    <form action="{{ route('pets.update', $petProfile->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Pet Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $petProfile->name }}" required>
        </div>

        <div class="form-group">
            <label for="type">Pet Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $petProfile->type }}" required>
        </div>

        <!-- Add more form fields for other attributes like breed, gender, etc. -->

        <div class="form-group">
            <label for="photo">Pet Photo</label>
            <input type="file" class="form-control" id="photo" name="photos">
        </div>

        <button type="submit" class="btn btn-primary">Update Pet Profile</button>
    </form>
</div>
@endsection
