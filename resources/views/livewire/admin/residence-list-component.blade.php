<div>
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">All Residences</h2>

            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-lg-12">
            <!-- TOP CAMPAIGN-->
            <div class="top-campaign">
                <h3 class="title-3 m-b-30">All Residences</h3>
                <div class="table-responsive">
                    <table class="table table-top-campaign">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Adresse</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($allresidences as $item)
                                <tr>
                                    <td class="text-center">{{ $item->id }}</td>
                                    <td class="text-center"><img src="{{ $item->image }}" width="50px" alt=""> </td>
                                    <td class="text-center">{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->adress }}</td>
                                    <td class="text-center">{!! Str::limit($item->description, 120) !!}...</td>
                                    <td class="text-center">
                                        <div class="table-data-feature">
                                            <a class="item" href="{{ route('admin.residence.edit',$item->slug) }}">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a class="item" href="#" wire:click="delete({{ $item->id }})">
                                                <i class="zmdi zmdi-delete"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <td class="text-center">Pas de residences</td>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
            <!--  END TOP CAMPAIGN-->
        </div>
    </div>
</div>
@push('scripts')
@if (Session::has('success'))
    <script>
        swal("Success","{!! Session::get('success') !!}","success",
        {
            button:"Ok",
        })
    </script>
@endif
@if (Session::has('success'))
    <script>
        toastr.success("{!! Session::get('success') !!}");
    </script>

@endif
@endpush
