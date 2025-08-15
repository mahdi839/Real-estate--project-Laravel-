@extends('layouts.adminlayouts.adminlayout')

@section('content')
<div class="container mt-4">
    <h2>Add Testimonial</h2>
    <form action="{{ route('testimonials.store') }}" method="POST">
        @csrf

        @include('dashboard.testimonials.form')

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
