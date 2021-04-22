@extends('layout')

@section('content')
    <h1>User update</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="email" class="form-label">Email*</label>
            <input
                type="email"
                class="form-control @if($errors->has('email')) is-invalid @endif"
                id="email"
                name="email"
                value="{{ old('email', $user->email) }}"
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
                value="{{ old('first_name', $user->first_name) }}"
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
                value="{{ old('last_name', $user->last_name) }}"
            >
            @if($errors->has('last_name'))
                <div class="invalid-feedback">{{ $errors->first('last_name') }}</div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update user</button>
    </form>
@endsection
