@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{Auth::user()->name}} You are logged in! <br>
                    Please decrypt your pass code :   {{Auth::user()->password}}
                    <p class="card-text">User created at : {{Auth::user()->created_at}}</p>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
