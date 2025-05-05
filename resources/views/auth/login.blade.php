@extends('layouts.app')

@section('content')
{{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

<label class="form-check-label" for="remember">
    {{ __('Remember Me') }}
</label> --}}

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="fw-bold m-0">Login</h4>
                        <span class="text-muted">atau <a href="/register">Buat Akun</a></span>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
