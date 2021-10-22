@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <a>
                    {{ Auth::user()->name }}
                    </a>
                    <ul>
                    <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
            @if (Route::has('login'))
                    @auth
                        @if ( Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                        <li><a href="{{ url('permission') }}">User control</a></li>
            @endif
                    @endif
                @endif
                    <li><a href="{{ url('order') }}">Order</a></li>
                    <li><a href="#about">Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
