@extends('layout')

@section('content')
    <h1>User list</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Email address</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col" colspan="2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->email }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary"><i class="bi-pencil"></i> Edit</a></td>
            <td>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="bi-trash"></i> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
