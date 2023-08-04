@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="text-left">Name: {{ Auth::user()->name }} </p>
                        <p class="text-left">Email: {{ Auth::user()->email }} </p>
                        <p class="text-left mb-0">Role:
                            @if (Auth::user()->is_admin)
                                Admin
                            @else
                                User
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">

            </div>
        </div>
    </div>
@endsection
