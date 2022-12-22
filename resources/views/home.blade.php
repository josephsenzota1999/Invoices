@extends('layouts.app')

@section('content')
@include('include.navBar')
<div class="container2">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">All Invoices</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Outstanding</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Paid</a>
                </li>
                
              </ul>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
