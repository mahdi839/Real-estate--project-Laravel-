@extends('layouts.adminlayouts.adminlayout')

@section('content')
<div class="container mt-4">
    <h2>Edit Testimonial</h2>
    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST">
        @csrf
        @method('PUT')

        @include('dashboard.testimonials.form', ['testimonial' => $testimonial])

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
