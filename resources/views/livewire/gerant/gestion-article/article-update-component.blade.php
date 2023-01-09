<div>
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Edit Need</h2>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <strong>Edit a Need</strong>
                </div>
                <form wire:submit.prevent="updateArticle()" class="form-horizontal">
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Name</label>
                            <input type="text" id="name" wire:model="name" placeholder="Enter the Residence Name." wire:keyup="generateslug" class="form-control @error('name') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('name'){{ $message }}@enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="slug" class=" form-control-label">Slug</label>
                            <input type="text" id="slug" wire:model="slug" placeholder="Enter the Residence slug." class="form-control @error('slug') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('slug'){{ $message }}@enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="quantity" class=" form-control-label">Quantity</label>
                            <input type="number" id="quantity" wire:model="quantity" placeholder="Enter the Quantity" class="form-control @error('quantity') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('quantity'){{ $message }}@enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
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



