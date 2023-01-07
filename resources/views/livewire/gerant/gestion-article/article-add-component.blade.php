<div>
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Ajouter Item</h2>

            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <strong>Ajouter une Residence</strong>
                </div>
                <form wire:submit.prevent="addItem()" class="form-horizontal">
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Nom</label>
                            <input type="text" id="name" wire:model="name" placeholder="Enter the Residence Name." wire:keyup="generateslug" class="form-control @error('name') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('name'){{ $message }}@enderror
                            </div>
                        </div>
                        <div class="form-group" hidden>
                            <label for="slug" class=" form-control-label">slug</label>
                            <input type="text" id="slug" hidden wire:model="slug" placeholder="Enter the Residence slug." class="form-control @error('slug') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('slug'){{ $message }}@enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="residence" class=" form-control-label">Residence</label>
                            {{-- <input type="text" id="residence" wire:model="residence_id" placeholder="Enter the Residence residence." class="form-control @error('residence') is-invalid @enderror"> --}}

                                <select name="" class="form-control" wire:model="residence_id" id="">
                                    <option value="">Select</option>
                                    @foreach ($reside as $item)
                                        <option class="form-control" value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                </select>
                            <div class="invalid-feedback">
                                @error('residence_id'){{ $message }}@enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Add
                        </button>
                    </div>
                </form>
            </div>
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


