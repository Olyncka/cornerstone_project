<div>
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Add Program Manager</h2>

            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <strong>Edit Program Manager</strong>
                </div>
                <form wire:submit.prevent="updateUser()" class="form-horizontal">
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Name</label>
                            <input type="text" id="name" wire:model="name" placeholder="Enter the Program Manager Name." class="form-control @error('name') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('name'){{ $message }}@enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class=" form-control-label">Email</label>
                            <input type="text" id="email" wire:model="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('email'){{ $message }}@enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="file-input" class=" form-control-label">Image</label>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="file-input" wire:model="image" class="form-control-file @error('image') is-invalid @enderror">
                                </div>
                                <div class="invalid-feedback">
                                    @error('image'){{ $message }}@enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="slug" class="form-control-label">Residence</label>
                                <select class="form-control  @error('residence_id') is-invalid @enderror" wire:model="residence_id" >
                                    <option value="">Select</option>
                                    @foreach ($residences as $res)
                                        <option value="{{ $res->id }}">{{ $res->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    @error('residence_id'){{ $message }}@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Edit
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

