<div>
    {{-- Success is as dangerous as failure. --}}
</div>
@foreach ($inputs as $key => $value)
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group mb-3">
                    <label for="item">2. Item(s) donated</label>
                    <select class="form-control" wire:model="inputs.{{ $key }}.item" id="">
                        @foreach ($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                  {{-- <input type="text" class="form-control" wire:model="inputs.{{ $key }}.item"  id="item"> --}}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number"  class="form-control" wire:model="inputs.{{ $key }}.quantity" id="quantity">
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">Remove</button>
            </div>
        </div>
        @endforeach
