@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-muted">HELLO ADMIN!</h1>
    <div class="row justify-content-center">
        <div class="sidebar col-md-3" role="navigation">
            <div class="card">
                <div class="card-header text-center">Selecta DNB</div>
                <div class="card-body">
                    <ul class="list-group list-unstyled text-dark">
                        <a href="#"><li class="sidebar-item mt-0"><i class="fas fa-table pr-2"></i> All Products</li></a>
                        <a href="#"><li class="sidebar-item"><i class="fas fa-plus-square pr-2"></i> New Product</li></a>
                        <a href="#"><li class="sidebar-item"><i class="fas fa-database pr-2"></i> Orders</li></a>
                        <a href="#"><li class="sidebar-item"><i class="fas fa-users pr-2"></i> Users</li></a>
                        <a href="#"><li class="sidebar-item"><i class="fas fa-envelope pr-2"></i> Queries</li></a>
                    </ul>
                </div>
            </div>
        </div>
            <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="fas fa-user-secret pr-2"></i> Welcome {{ Auth::user()->name }} <small>({{ Auth::user()->role }})</small></div>

                <div class="card-body">
                    You are logged in!
                </div> 
            </div>
        </div>
    </div>
</div> 
@endsection