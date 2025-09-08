<div class="row mb-3">
    <div class="col-md-6 mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $page->title ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Slug (optional)</label>
        <input type="text" name="slug" class="form-control" value="{{ old('slug', $page->slug ?? '') }}">
    </div>

    <div class="col-12 mb-3">
        <label class="form-label">Content</label>
        <textarea name="content" rows="6" class="form-control">{{ old('content', $page->content ?? '') }}</textarea>
    </div>

    <hr class="my-4">

    <h5>SEO Fields</h5>

    <div class="col-md-6 mb-3">
        <label class="form-label">Meta Title</label>
        <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $page->meta_title ?? '') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Meta Keywords</label>
        <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $page->meta_keywords ?? '') }}">
    </div>

    <div class="col-12 mb-3">
        <label class="form-label">Meta Description</label>
        <textarea name="meta_description" rows="3" class="form-control">{{ old('meta_description', $page->meta_description ?? '') }}</textarea>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Canonical URL</label>
        <input type="url" name="canonical_url" class="form-control" value="{{ old('canonical_url', $page->canonical_url ?? '') }}">
    </div>

    <hr class="my-4">
    <h5>Open Graph & Twitter Cards</h5>

    <div class="col-md-6 mb-3">
        <label class="form-label">OG Title</label>
        <input type="text" name="og_title" class="form-control" value="{{ old('og_title', $page->og_title ?? '') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">OG Description</label>
        <input type="text" name="og_description" class="form-control" value="{{ old('og_description', $page->og_description ?? '') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">OG Image URL</label>
        <input type="url" name="og_image" class="form-control" value="{{ old('og_image', $page->og_image ?? '') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Twitter Card Info</label>
        <input type="text" name="twitter_card" class="form-control" value="{{ old('twitter_card', $page->twitter_card ?? '') }}">
    </div>

    <div class="col-12 mb-3">
        <label class="form-label">Structured Data / JSON-LD Script</label>
        <textarea name="json_ld" rows="5" class="form-control" placeholder='Paste your JSON-LD script here'>{{ old('json_ld', $page->json_ld ?? '') }}</textarea>
    </div>

    <div class="col-12 text-center mt-4">
        <button type="submit" class="btn btn-primary">{{ $button }}</button>
        <a href="{{ route('admin.pages.index') }}" class="btn btn-label-secondary">Cancel</a>
    </div>
</div>
