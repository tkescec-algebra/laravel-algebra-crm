@extends('layout.app')

@section('title')
    Edit Client - {{ $client->first_name }}
@endsection

@section('content')
    <div class="container mt-5">
        <h2>Edit Client - {{ $client->first_name }}</h2>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
        <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="first_name" value="{{ $client->first_name }}" required>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="last_name" value="{{ $client->last_name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $client->phone }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Client Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($client->image)
                    <img src="{{ \App\Helpers\Image::get($client->image) }}" alt="Client Image" class="img-thumbnail mt-2" width="150">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
