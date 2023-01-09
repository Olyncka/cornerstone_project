<div>
    <label class="switch switch-default switch-pill switch-primary mr-2" for="{{ $name.$item->id }}">
        <input type="checkbox" wire:model="status" name="toggle" id="{{ $name.$item->id }}" class="switch-input" checked="true">
        <span class="switch-label"></span>
        <span class="switch-handle"></span>
    </label>
</div>
