@extends('layouts.adminlayouts.adminlayout')

@section('content')
<div class="container mt-4">
    <h2>Add Agent</h2>
    <form action="{{ route('agents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('dashboard.agents.form')

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('agents.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
