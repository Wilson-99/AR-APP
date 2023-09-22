<div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h4 class="row justify-content-center">Login</h4>
                <form wire:submit.prevent="loginUser">
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" wire:model.defer="email">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating py-2">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" wire:model.defer="password">
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault" wire:model.defer="remember">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>
                    <button class="btn btn-success w-100 py-2" type="submit">Sign in</button>
                    <a href="{{ route('password.request') }}" class="text-primary">Reset your password</a><br>
                    <a href="{{ route('register') }}" class="text-primary">Register right now...</a>
                    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
                </form>
            </div>
        </div>
    </div>
</div>
