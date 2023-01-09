<div>
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">All Donations</h2>

            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-lg-12">
            <!-- TOP CAMPAIGN-->
            <div class="top-campaign">
                <h3 class="title-3 m-b-30">All Donations</h3>
                <div class="table-responsive">
                    <table class="table table-top-campaign">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Residence</th>
                                <th class="text-center">Need</th>
                                <th class="text-center">Donor</th>
                                <th class="text-center">Quantity</th>
                                <th colspan="2" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($donations as  $item)
                                <tr>
                                    <td class="text-center"># {{ $item->id }}</td>
                                    <td class="text-center">
                                        {{ $item->residences->name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item->articles->name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item->donateurs->nom}}
                                    </td>
                                    <td class="text-center">
                                        {{ $item->quantity}}
                                    </td>
                                    <td class="text-center">
                                        <livewire:donations.toogle-button :item="$item" :name="'status'" :key="'status'.$item->id"/>
                                    </td>
                                    {{-- <td class="text-center">
                                        <div class="table-data-feature">
                                            <a class="item" href="{{ route('admin.residence.edit',$item->slug) }}">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a class="item" href="#" wire:click="delete({{ $item->id }})">
                                                <i class="zmdi zmdi-delete"></i>
                                            </a>
                                        </div>
                                    </td> --}}
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

