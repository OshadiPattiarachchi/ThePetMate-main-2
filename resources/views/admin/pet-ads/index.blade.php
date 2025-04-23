@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Manage Pet Ads</h1>
        @foreach($petAds as $petAd)
            <div>
                <p>{{ $petAd->title }} ({{ $petAd->price }})</p>
                <form action="{{ route('admin.deletePetAd', $petAd->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
