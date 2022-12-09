<div>
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Add Residence</h2>
                <button class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi zmdi-plus"></i>add item</button>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <strong>Ajouter une Residence</strong>
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
                            <label for="slug" class=" form-control-label">slug</label>
                            <input type="text" id="name" wire:model="slug" placeholder="Enter the Residence slug." class="form-control @error('slug') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('slug'){{ $message }}@enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="adresse" class=" form-control-label">Adresse</label>
                            </div>
                            <input type="text" id="name" wire:model="adresse" placeholder="Enter the Residence Adresse" class="form-control @error('adresse') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('adresse'){{ $message }}@enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="adresse" class=" form-control-label">Adresse</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea id="description" cols="30" rows="10" wire:model="description" class="form-control"></textarea>
                                <span class="help-block"></span>
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
<script>
    $(document).ready(function() {
        $('#adresse').summernote({
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
                    @this.set('adresse',contents);
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
