@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('admin.users') }}" class="btn btn-primary">Manage Users</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('admin.pets') }}" class="btn btn-primary">Manage Pets</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('admin.pet-ads') }}" class="btn btn-primary">Manage Pet Ads</a>
            </div>
        </div>
    </div>
@endsection
