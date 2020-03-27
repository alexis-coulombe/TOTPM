<?php
    /**
     * Login form
     */
?>

@extends('layouts.app')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex justify-content-center align-self-center align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auto-form-wrapper">
                            <div class="row justify-content-center align-self-center">
                                <img src="{{ URL::asset('img/logo.png') }}" width="40px" height="45px">
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email" class="label">Email</label>
                                    <div class="input-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                            </span>
                                        </div>
                                    </div>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="label">Password</label>
                                    <div class="input-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                            </span>
                                        </div>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                                </div>
                                <div class="form-group d-flex justify-content-between">
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input">
                                            Keep me signed in <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-small forgot-password text-black">Forgot Password ?</a>
                                    @endif
                                </div>
                                <!--<div class="form-group">
                                    <button class="btn btn-block g-login">
                                        <img class="mr-3" src="../../../assets/images/file-icons/icon-google.svg"
                                             alt="">Log in with Google
                                    </button>
                                </div>-->
                                <div class="text-block text-center my-3">
                                    <span class="text-small font-weight-semibold">Don't have an account ?</span>
                                    <a href="{{ route('register') }}" class="text-black text-small">Create one here.</a>
                                </div>
                            </form>
                        </div>
                        <ul class="auth-footer">
                            <li>
                                <a href="#">Conditions</a>
                            </li>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                        </ul>
                        <p class="footer-text text-center">copyright © {{ date('Y') }} TOTPM. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
