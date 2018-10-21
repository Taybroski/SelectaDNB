@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if ($role == 'customer')
                        <i class="fas fa-user pr-2"></i>Welcome {{ $name }} <small>({{ $role }})</small>
                    @elseif ($role == 'agent')
                         <i class="fas fa-user-tie pr-2"></i>Welcome {{ $name }} <small>({{ $role }})</small>
                    @elseif ($role == 'admin')
                        <i class="fas fa-user-secret pr-2"></i>Welcome {{ $name }} <small>({{ $role }})
                    @endif
                </div>

                <div class="card-body">
                    You are logged in!
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
