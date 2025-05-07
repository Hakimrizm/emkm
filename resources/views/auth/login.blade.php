@extends('layouts.app')

@section('content')
{{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

<label class="form-check-label" for="remember">
    {{ __('Remember Me') }}
</label> --}}

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="fw-bold m-0">Login</h4>
                    </div>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3 mt-4">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required>
                                <label for="email">Alamat Email</label>
                            </div>
                            @error('email')
                                <span class="text-danger ms-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="" name="password" required>
                                <label for="password">Password</label>
                            </div>
                            @error('password')
                                <span class="text-danger ms-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Login</button>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <hr class="flex-grow-1 me-2">
                            <span class="text-muted">atau</span>
                            <hr class="flex-grow-1 ms-2">
                        </div>
                        <div class="mb-3">
                            <a href="{{ route('google.login') }}" class="btn btn-outline-primary w-100 d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google me-1" viewBox="0 0 16 16">
                                    <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                                </svg>
                                <span>Google</span>
                            </a>
                        </div>
                        <div class="mb-3 text-center">
                            <span class="text-muted">Belum punya akun? <a href="{{ route('register') }}">Buat Akun</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
