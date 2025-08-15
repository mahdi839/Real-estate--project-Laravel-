@extends('layouts.adminlayouts.adminlayout')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <h2>Agents</h2>
        <a href="{{ route('agents.create') }}" class="btn btn-primary">Add Agent</a>
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
                        <th>Image</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Social Links</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($agents as $agent)
                        <tr>
                            <td>{{ $agent->id }}</td>
                            <td>
                                @if($agent->image)
                                    <img src="{{ asset('storage/' . $agent->image) }}" alt="Agent Image" width="60" height="60" class="rounded-circle">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $agent->name }}</td>
                            <td>{{ $agent->designation }}</td>
                            <td>
                                @if($agent->fb_link) <a href="{{ $agent->fb_link }}" target="_blank">Facebook - </a> @endif
                                @if($agent->insta_link) <a href="{{ $agent->insta_link }}" target="_blank">Instagram -</a> @endif
                                @if($agent->twitter_link) <a href="{{ $agent->twitter_link }}" target="_blank">TWeeter/X</a> @endif
                            </td>
                            <td>
                                <a href="{{ route('agents.edit', $agent->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('agents.destroy', $agent->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this agent?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">No agents found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
