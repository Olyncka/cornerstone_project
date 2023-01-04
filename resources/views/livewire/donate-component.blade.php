<div>
    @livewireStyles
    <div class="row text-justify align-itens-center mx-5">
        <h3 class="my-4">{{ $residences->name }}</h3>
        <div class="col-md-6">

            <img src="{{ $residences->image }}" class="my-3" alt="">
        </div>
        <div class="col-md-6 d-flex align-itens-center justify-content-center">
            <figure class="text-center">
                <blockquote class="blockquote text-justify ">
                  <p>{{ $residences->description }}</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  Resident <cite title="Source Title"></cite>
                </figcaption>
              </figure>
        </div>
    </div>
    <div class="row m-5">
        <div class="col-md-6">
        <h4>Urgents Needs</h4>
        <ul>
            <li>Toothpaste</li>
            <li>Toothpaste</li>
            <li>Toothpaste</li>
            <li>Toothpaste</li>
            <li>Toothpaste</li>
        </ul>
        <p>Please note we only serve adult women, and due to limited capacity and storage we do not accept the following items.</p>
        <ul>
            <li>Used clothing</li>
            <li>Used footwear</li>
            <li>Furniture</li>
            <li>Children’s items</li>

            </li>
        </ul>
       </div>
       <div class="col-md-6 ">
        <h4>Please Fill out this form for your donations</h4>
        <form>
            <!-- <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div> -->
            <div class="form-group">
              <label for="exampleFormControlSelect1">1. Select a Residence</label>
              {{-- <select class="form-control" id="exampleFormControlSelect1" >
                <option>-- select a residence--</option>
                @foreach ($residences as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
              </select> --}}
              <input type="text" wire:model="name" class="form-control" disabled>
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
                {{-- <div class="col-sm-6">
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
                </div> --}}
                <div class="col-md-2" wire:ignore>
                    <button class="btn text-white btn-info btn-sm m-3" wire:click.prevent="fillItem">Ajouter</button>
                </div>
            </div>

                <table>
                    @foreach ($itemsForm as $item)
                        <td>{{ $item }}</td>
                    @endforeach

                </table>

            <label> Date</label>
            <div class="form-group row mb-3" >
                <label for="inputEmail3" class="col-sm-2 col-form-label">Date </label>
                <div class="col-sm-10">
                  <input type="date"  class="form-control" wire:model="don_date" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <label>4. Donor Informations</label>
            <div class="form-group row mb-3" >
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text"  class="form-control" wire:model="don_name" id="inputEmail3" placeholder="John Doe">
                </div>
            </div>
            <div class="form-group row mb-3" >
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email"  class="form-control" wire:model="don_email" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="inputPassword3"  class="col-sm-2 col-form-label">Phone number</label>
                <div class="col-sm-10">
                  <input type="tel"  class="form-control" wire:model="don_phone" id="inputPassword3" placeholder="te:+125346788">
                </div>
            </div>
            <button type="submit button" class="btn btn-primary">Envoyer</button>
        </form>

       </div>

    </div>

      @livewireScripts
</div>
