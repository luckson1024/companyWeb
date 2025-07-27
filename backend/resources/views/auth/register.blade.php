@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Register</div>
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

                    <form method="POST" action="{{ route('register') }}" data-controller="form">
                        @csrf
                        <x-form-input
                            type="text"
                            name="name"
                            label="Name"
                            required
                            autofocus />

                        <x-form-input
                            type="email"
                            name="email"
                            label="Email Address"
                            required />

                        <x-form-input
                            type="password"
                            name="password"
                            label="Password"
                            required
                            data-rules="password" />

                        <x-form-input
                            type="password"
                            name="password_confirmation"
                            label="Confirm Password"
                            required
                            data-rules="password-confirmation" />

                        <div class="mb-0">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
