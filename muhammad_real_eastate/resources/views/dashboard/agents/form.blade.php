<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" value="{{ old('name', $agent->name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Designation</label>
    <input type="text" name="designation" value="{{ old('designation', $agent->designation ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Facebook Link</label>
    <input type="url" name="fb_link" value="{{ old('fb_link', $agent->fb_link ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Instagram Link</label>
    <input type="url" name="insta_link" value="{{ old('insta_link', $agent->insta_link ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Twitter Link</label>
    <input type="url" name="twitter_link" value="{{ old('twitter_link', $agent->twitter_link ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Image</label>
    @if(!empty($agent->image))
        <div class="mb-2">
            <img src="{{ asset('storage/' . $agent->image) }}" width="80" height="80" class="rounded-circle">
        </div>
    @endif
    <input type="file" name="image" class="form-control">
</div>
