{{ csrf_field() }}

<div class="form-group">
    <label for="tag" class="col-md-3 control-label">Tag</label>
    <div class="col-md-3">
        <input type="text"
               class="form-control"
               name="tag"
               value="{{ old('tag') ?? $tag->tag }}"
               autofocus
               required
        >
    </div>
</div>

<div class="form-group">
    <label for="title" class="col-md-3 control-label">
        Title
    </label>
    <div class="col-md-8">
        <input type="text"
               class="form-control"
               name="title"
               value="{{ old('title') ?? $tag->title }}"
               required
        >
    </div>
</div>

<div class="form-group">
    <label for="subtitle" class="col-md-3 control-label">
        Subtitle
    </label>
    <div class="col-md-8">
        <input type="text"
               class="form-control"
               name="subtitle"
               value="{{ old('subtitle') ?? $tag->subtitle }}"
               required
        >
    </div>
</div>

<div class="form-group">
    <label for="meta_description" class="col-md-3 control-label">
        Meta Description
    </label>
    <div class="col-md-8">
        <textarea class="form-control"
                  name="meta_description"
                  rows="3"
                  required
        >{{ old('meta_description') ?? $tag->meta_description }}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="page_image" class="col-md-3 control-label">
        Page Image
    </label>
    <div class="col-md-8">
        <input type="text"
               class="form-control"
               name="page_image"
               value="{{ old('page_image') ?? $tag->page_image }}"
               required
        >
    </div>
</div>

<div class="form-group">
    <label for="layout" class="col-md-3 control-label">
        Layout
    </label>
    <div class="col-md-4">
        <input type="text"
               class="form-control"
               name="layout"
               value="{{ old('layout') ?? $tag->layout }}"
               required
        >
    </div>
</div>

<div class="form-group">
    <label for="reverse_direction" class="col-md-3 control-label">
        Direction
    </label>
    <div class="col-md-7">
        <label class="radio-inline">
            <input type="radio" name="reverse_direction" id="reverse_direction"
                   @if (! (old('reverse_direction') ?? $tag->reverse_direction))
                   checked="checked"
                   @endif
                   value="0"
                   required
            >
            Normal
        </label>
        <label class="radio-inline">
            <input type="radio" name="reverse_direction"
                   @if (old('reverse_direction') ?? $tag->reverse_direction)
                   checked="checked"
                   @endif
                   value="1"
                   required
            >
            Reversed
        </label>
    </div>
</div>

<div class="form-group">
    <div class="col-md-7 col-md-offset-3">
        <button type="submit" class="btn btn-primary btn-md">
            {{ $submitButtonText ?? 'Add New Tag' }}
        </button>
        <a href="/backend/tags" class="btn btn-link btn-md">
            Go back
        </a>
    </div>
</div>