@extends('layouts.adminlayouts.adminlayout')

@section('content')
<div class="container mt-5">
    <h2>Footer Information</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('footer-info.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Facebook URL</label>
            <input type="url" name="facebook" value="{{ old('facebook', $footerInfo->facebook ?? '') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Youtube URL</label>
            <input type="url" name="youtube" value="{{ old('youtube', $footerInfo->youtube ?? '') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>LinkedIn URL</label>
            <input type="url" name="linkedin" value="{{ old('linkedin', $footerInfo->linkedin ?? '') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Twitter URL</label>
            <input type="url" name="twitter" value="{{ old('twitter', $footerInfo->twitter ?? '') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Company Location</label>
            <input type="text" name="company_location" value="{{ old('company_location', $footerInfo->company_location ?? '') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $footerInfo->phone ?? '') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $footerInfo->email ?? '') }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
