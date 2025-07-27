@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('login') }}" data-controller="form">
                        @csrf
                                                <x-form-input
                            type="email"
                            name="email"
                            label="Email Address"
                            required
                            autofocus />

                        <x-form-input
                            type="password"
                            name="password"
                            label="Password"
                            required />

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>

                        <div class="mb-0">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a href="{{ route('password.request') }}" class="btn btn-link">Forgot Your Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
