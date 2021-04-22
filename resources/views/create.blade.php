@extends('layout')

@section('content')
    <h1>User create</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email*</label>
            <input
                type="email"
                class="form-control @if($errors->has('email')) is-invalid @endif"
                id="email"
                name="email"
                value="{{ old('email', '') }}"
            >
            @if($errors->has('email'))
                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="first_name" class="form-label">First name*</label>
            <input
                type="text"
                class="form-control @if($errors->has('first_name')) is-invalid @endif"
                id="first_name"
                name="first_name"
                value="{{ old('first_name', '') }}"
            >
            @if($errors->has('first_name'))
                <div class="invalid-feedback">{{ $errors->first('first_name') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Last name*</label>
            <input
                type="text"
                class="form-control @if($errors->has('last_name')) is-invalid @endif"
                id="last_name"
                name="last_name"
                value="{{ old('last_name', '') }}"
            >
            @if($errors->has('last_name'))
                <div class="invalid-feedback">{{ $errors->first('last_name') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
                type="password"
                class="form-control @if($errors->has('password')) is-invalid @endif"
                id="password"
                name="password"
                value="{{ old('password', '') }}"
            >
            @if($errors->has('password'))
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm password</label>
            <input
                type="password"
                class="form-control @if($errors->has('password_confirmation')) is-invalid @endif"
                id="password_confirmation"
                name="password_confirmation"
                value="{{ old('password_confirmation', '') }}"
            >
            @if($errors->has('password_confirmation'))
                <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Create user</button>
    </form>
@endsection
