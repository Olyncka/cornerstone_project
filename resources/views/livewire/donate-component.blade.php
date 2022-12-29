<div>
    @livewireStyles
    <form>
        <!-- <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div> -->
        <div class="form-group">
          <label for="exampleFormControlSelect1">1. Select a Residence</label>
          <select class="form-control" id="exampleFormControlSelect1" >
            <option>-- select a residence--</option>
            @foreach ($residences as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
        </div>
        <!-- <div class="form-group">
          <label for="exampleFormControlSelect2">Example multiple select</label>
          <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div> -->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group mb-3">
                    <label for="item">Item(s) donated</label>
                    <input type="text" class="form-control" wire:model="item.0"  id="item">
                  </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" wire:model="quantity.0" id="quantity">
                </div>
            </div>
            <div class="col-md-2" wire:ignore>
                <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Add</button>
            </div>
        </div>
        @foreach ($inputs as $key => $value)
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group mb-3">
                    <label for="item">2. Item(s) donated</label>
                  <input type="text" class="form-control" wire:model="item.{{ $value }}"  id="item">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number"  class="form-control" wire:model="quantity.{{ $value }}" id="quantity">
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">Remove</button>
            </div>
        </div>
        @endforeach
        <label>4. Donor Informations</label>
        <div class="form-group row mb-3" >
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" id="inputEmail3" placeholder="John Doe">
            </div>
        </div>
        <div class="form-group row mb-3" >
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email"  class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Phone number</label>
            <div class="col-sm-10">
              <input type="tel"  class="form-control" id="inputPassword3" placeholder="te:+125346788">
            </div>
        </div>
        <button type="submit button" class="btn btn-primary">Submit</button>
      </form>
      @livewireScripts
</div>
