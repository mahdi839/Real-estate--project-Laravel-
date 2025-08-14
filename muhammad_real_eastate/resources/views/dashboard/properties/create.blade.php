@extends('layouts.adminlayouts.adminlayout')
@section('content')

<div class="container mt-3">
    <h2>Add New Property</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Please fix the following errors:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Property Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') }}" step="0.01" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Location</label>
            <input type="text" name="location" class="form-control" value="{{ old('location') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Square Feet</label>
            <input type="number" name="sqrfit" class="form-control" value="{{ old('sqrfit') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Bedrooms</label>
            <input type="number" name="bed" class="form-control" value="{{ old('bed') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Bathrooms</label>
            <input type="number" name="bath" class="form-control" value="{{ old('bath') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Add Property</button>
        <a href="{{ route('properties.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>


 @endsection