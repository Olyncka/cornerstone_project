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
                  <p>{!! $residences->description !!}</p>
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
            @foreach ($items as $item)
                <li>{{ $item->name }}</li>
            @endforeach
        </ul>
        {{-- <p>Please note we only serve adult women, and due to limited capacity and storage we do not accept the following items.</p>
        <ul>
            <li>Used clothing</li>
            <li>Used footwear</li>
            <li>Furniture</li>
            <li>Children’s items</li>

            </li>
        </ul> --}}
       </div>
       <div class="col-md-6 ">
           <h4>Please Fill out this form for your donations</h4>
           <form action="{{ route('donation') }}" method="POST">
               @csrf
               <input type="text" hidden value="{{ $residence_id }}" name="residence_id">
               <div class="form-group">
                 <label for="exampleFormControlSelect1">Select a Residence</label>
                 <input type="text" wire:model="name" name class="form-control" disabled>
               </div>
                   <table wire:ignore>
                       <thead>
                           <th>Article</th>
                           <th>Quantity</th>
                           <th>Date of Delevery</th>
                           <th><a href="javascript:void(0)" class="btn btn-success" id="addRow">+</a></th>
                       </thead>
                       <tbody>
                           <tr>
                               <td>
                                   <select class="form-control m-3" name="item_id[]"  id="">
                                       <option value="">Select</option>
                                       @foreach ($itemsDB as $item)
                                           <option value="{{ $item->id }}">{{ $item->name }}</option>
                                       @endforeach
                                   </select>
                               </td>
                               <td><input type="number" name="quantity[]" class="form-control m-3"  id="quantity"></td>
                               <td><input type="date"  class="form-control m-3" name="don_date[]" id="inputEmail3" placeholder="Date Livraison"></td>

                               <td><a href="javascript:void(0)" class="btn btn-danger removeRow">-</a></td>


                               </td>
                           </tr>
                       </tbody>
                   </table>
               <label> Donor Informations</label>
               <div class="form-group row m-3" >
                   <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                   <div class="col-sm-10">
                     <input type="text"  class="form-control" name="don_name" id="inputEmail3" placeholder="John Doe">
                   </div>
               </div>
               <div class="form-group row m-3" >
                   <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                   <div class="col-sm-10">
                     <input type="email"  class="form-control" name="don_email" id="inputEmail3" placeholder="Email">
                   </div>
               </div>
               <div class="form-group row m-3">
                   <label for="inputPassword3"  class="col-sm-2 col-form-label">Phone number</label>
                   <div class="col-sm-10">
                     <input type="tel"  class="form-control" name="don_phone" id="inputPassword3" placeholder="te:+125346788">
                   </div>
               </div>
               <button type="submit" class="btn btn-primary m-3">Send</button>
           </form>

       </div>


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $('thead').on('click','#addRow',function(){

            var tr= "<tr>"+
                        "<td>"+
                            "<select class='form-control'name='item_id[]''>"+
                                "<option value=''>Select</option>"+
                                "@foreach ($itemsDB as $item)"+
                                    "<option value='{{ $item->id }}'>{{ $item->name }}</option>"+
                                "@endforeach"+
                            "</select>"+
                        "</td>"+
                        "<td><input type='number' name='quantity[]' class='form-control' id='quantity'></td>"+
                        "<td><input type='date'  class='form-control' name='don_date[]''  placeholder='Date Livraison'></td>"+
                        "<td><a href='javascript:void(0)'' class='btn btn-danger removeRow'>-</a></td>"+
                    "</tr>"
            $('tbody').append(tr);
        });

        $('tbody').on('click','.removeRow',function(){
            $(this).parent().parent().remove();
        });

    </script>

      @livewireScripts
      @push('scripts')


      @endpush
      <script>

    </script>

</div>
