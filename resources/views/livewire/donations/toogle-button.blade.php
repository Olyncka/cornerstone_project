<div>
    <label class="switch switch-default switch-pill switch-primary mr-2" for="{{ $name.$post->id }}">
        <input type="checkbox" wire:model="featured" name="toggle" id="{{ $name.$post->id }}" class="switch-input" checked="true">
        <span class="switch-label"></span>
        <span class="switch-handle"></span>
    </label>
</div>
