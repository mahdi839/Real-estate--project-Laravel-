<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" value="{{ old('name', $testimonial->name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Profession</label>
    <input type="text" name="profession" value="{{ old('profession', $testimonial->profession ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control" rows="4">{{ old('description', $testimonial->description ?? '') }}</textarea>
</div>
