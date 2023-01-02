<div>
    @if (Session::get('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif
    <form action="" wire:submit.prevent="loginhandler" method="POST">
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="au-input au-input--full @error('email') is-invalid @enderror" wire:model="email" placeholder="Votre Email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Mot de Passe</label>
            <input type="password" class="au-input au-input--full @error('password') is-invalid @enderror" wire:model="password" placeholder="Mot de Passe">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Connexion</button>
    </form>
</div>
