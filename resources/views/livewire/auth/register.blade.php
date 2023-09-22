<div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h4 class="row justify-content-center">Register</h4>
                <form wire:submit.prevent="registerUser">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="your name" wire:model.defer="name">
                        <label for="name">Fullname</label>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating py-3">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="(+244) 9xxxxxxxx" wire:model.defer="phone">
                        <label for="phone">Phone</label>
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating py-1">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" wire:model.defer="email">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating py-2">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" wire:model.defer="password">
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating py-2">
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="confirm password" wire:model.defer="password_confirmation">
                        <label for="password_confirmation">Confirmation password</label>
                        @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class="btn btn-success w-100 py-2" type="submit">Register</button>
                    <a href="{{ route('login') }}" class="text-primary">Login right now...</a>
                    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
                </form>
            </div>
        </div>
    </div>
</div>
