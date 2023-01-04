<div>
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Add Residence</h2>

            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-lg-12">
            <!-- TOP CAMPAIGN-->
            <div class="top-campaign">
                <div class="table-responsive">
                    <table class="table table-top-campaign">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Slug</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($allitems as $item)
                                <tr>
                                    <td class="text-center">{{ $item->id }}</td>
                                    <td class="text-center">{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->slug }}</td>
                                    <td class="text-center">
                                        <div class="table-data-feature">
                                            <a class="item" href="{{ route('item.edit',$item->slug) }}">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a class="item" href="#" wire:click="delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <td class="text-center">Pas de item</td>
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


