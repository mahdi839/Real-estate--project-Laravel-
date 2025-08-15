@extends('layouts.adminlayouts.adminlayout')

@section('content')
<div class="container mt-5">
    <h2>Edit Property</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('properties.update', $property->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{ old('title', $property->title) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $property->price) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Location</label>
            <input type="text" name="location" value="{{ old('location', $property->location) }}" class="form-control" required>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Square Feet</label>
                <input type="number" name="sqrfit" value="{{ old('sqrfit', $property->sqrfit) }}" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Bedrooms</label>
                <input type="number" name="bed" value="{{ old('bed', $property->bed) }}" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Bathrooms</label>
                <input type="number" name="bath" value="{{ old('bath', $property->bath) }}" class="form-control" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Property Image</label>
            @if ($property->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $property->image) }}" alt="Property Image" class="rounded" width="100" height="100">
                </div>
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('properties.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Update Property</button>
        </div>
    </form>
</div>
@endsection
