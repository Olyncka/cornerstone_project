<div>
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Add Residence</h2>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <strong>Add Residence</strong>
                </div>
                <form wire:submit.prevent="addResidence()" class="form-horizontal">
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Name</label>
                            <input type="text" id="name" wire:model="name" placeholder="Enter the Residence Name." wire:keyup="generateslug" class="form-control @error('name') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('name'){{ $message }}@enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="slug" hidden class="form-control-label">slug</label>
                            <input type="text" id="slug" hidden wire:model="slug" placeholder="Enter the Residence slug." class="form-control @error('slug') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('slug'){{ $message }}@enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image" class=" form-control-label">Image</label>
                            <input type="file" id="image" wire:model="image" placeholder="Enter the Residence Image" class="form-control @error('image') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('image'){{ $message }}@enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="adresse" class=" form-control-label">Adresse</label>
                            <input type="text" id="adresse" wire:model="adresse" placeholder="Enter the Residence Adresse" class="form-control @error('adresse') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('adresse'){{ $message }}@enderror
                            </div>
                        </div>
                        <div class="form-group" wire:ignore>
                            <label for="adresse" class=" form-control-label">Description</label>
                            <textarea id="description" cols="30" rows="10" wire:model="description" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Add
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
<script>
    $(document).ready(function() {
        $('#description').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            height:300,
            callbacks: {
                onChange: function(contents, $editable) {
                    @this.set('description',contents);
                }
            }
            });
    });
</script>
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
