{{-- @inject('image', '\App\Helpers\Image') --}}
@extends('layout.app')

@section('title')
    Client - {{ $client->first_name }}
@endsection

@section('content')
    <div class="container mt-5">
        <h2>Client - {{ $client->first_name }}</h2>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <div class="card" style="width: 18rem;">
            <img src="{{ \App\Helpers\Image::get($client->image) }}" class="card-img-top" alt="Client Image">
            <div class="card-body">
                <h5 class="card-title">Client Details</h5>
                <p class="card-text"><strong>Name:</strong> {{ $client->first_name }} {{ $client->last_name }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $client->email }}</p>
                <p class="card-text"><strong>Phone:</strong> {{ $client->phone }}</p>
                <!-- User details -->
                <hr>
                <h6 class="card-subtitle mb-2 text-muted">User Details</h6>
                <p class="card-text"><strong>User Name:</strong> {{ $client->user->first_name }} {{ $client->user->last_name }}</p>
                <p class="card-text"><strong>User Email:</strong> {{ $client->user->email }}</p>
            </div>
        </div>

    </div>
@endsection
