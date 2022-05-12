<?php
@extends('auth.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profili</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Ju ndodheni ne profilin e klientit!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
