@extends('layouts.app')

@section('content')

  <h1 class="text-muted text-center">Users</h1>

  <table class="table table-hover border text-center">
    <thead>
      <tr>
        <th scope="col"><a href="#"><small class="underline">Select All</small></a></th>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Signed Up</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>

      @if (count($users) > 0)
        @foreach ($users as $user)
          <tbody>
            <tr>
              <td><input type="checkbox"></td>
              <td>{{ $user->id }}</th>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->role }}</td>
              <td>{{ $user->created_at }}</td>
              <td><i class="fas fa-trash-alt"></i></td>
            </tr>
          </tbody>
        @endforeach      
      @endif
  </table>
@endsection