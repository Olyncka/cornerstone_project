<div>
    <div class="login-form">
        @if (Session::get('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif
        <form action="" wire:submit.prevent="loginhandler()" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="au-input au-input--full @error('email') is-invalid @enderror" wire:model="email" placeholder="Votre Email">
                <div class="invalid-feedback">
                    @error('email'){{ $message }}@enderror
                </div>
            </div>
            <div class="form-group">
                <label>Mot de Passe</label>
                <input type="password" class="au-input au-input--full @error('password') is-invalid @enderror" wire:model="password" placeholder="Mot de Passe">
                <div class="invalid-feedback">
                    @error('password'){{ $message }}@enderror
                </div>
            </div>
            {{-- <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Connexion</button> --}}
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Ajouter
                </button>
            </div>
        </form>

    </div>
</div>
