@extends('layouts.adminlayouts.adminlayout')

@section('content')
<div class="container mt-4">
    <h2>Edit Agent</h2>
    <form action="{{ route('agents.update', $agent->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('dashboard.agents.form', ['agent' => $agent])

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('agents.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
