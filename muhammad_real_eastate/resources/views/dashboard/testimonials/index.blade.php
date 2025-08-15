@extends('layouts.adminlayouts.adminlayout')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <h2>Testimonials</h2>
        <a href="{{ route('testimonials.create') }}" class="btn btn-primary">Add Testimonial</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Profession</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($testimonials as $testimonial)
                        <tr>
                            <td>{{ $testimonial->id }}</td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->profession }}</td>
                            <td>{{ Str::limit($testimonial->description, 50) }}</td>
                            <td>
                                <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this testimonial?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">No testimonials found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
