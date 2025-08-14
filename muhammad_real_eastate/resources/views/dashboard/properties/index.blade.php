@extends('layouts.adminlayouts.adminlayout')

@section('content')
<!-- Properties Management Section -->
<div id="properties" class="page-section mt-5 px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Properties Management</h2>
        <a href="{{ route('properties.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i> Add Property
        </a>
    </div>
    
    <div class="card dashboard-card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Location</th>
                            <th>Square Feet</th>
                            <th>Bath</th>
                            <th>Bed</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($properties as $property)
                            <tr>
                                <td>{{ $property->id }}</td>
                                <td>
                                    @if($property->image)
                                        <img src="{{ asset('storage/' . $property->image) }}" alt="Property Image" width="60" height="60" class="rounded">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>{{ $property->title }}</td>
                                <td>৳ {{ number_format($property->price, 2) }}</td>
                                <td>{{ $property->location }}</td>
                                <td>{{ $property->sqrfit }} sqft</td>
                                <td>{{ $property->bath }}</td>
                                <td>{{ $property->bed }}</td>
                                <td class="action-btns">
                                    <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="{{ route('properties.show', $property->id) }}" class="btn btn-sm btn-outline-success">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <form action="{{ route('properties.destroy', $property->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center text-muted">No properties found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
