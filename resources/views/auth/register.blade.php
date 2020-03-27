<?php
    /**
     * Registration form
     */
?>

@extends('layouts.app')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex justify-content-center align-self-center align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12 mx-auto">
                        <div class="auto-form-wrapper">
                            <div class="row justify-content-center align-self-center">
                                <img src="{{ URL::asset('img/logo.png') }}" width="40px" height="45px">
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name" class="label">Username</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" placeholder="Username" required autocomplete="name" autofocus>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                            </span>
                                        </div>
                                    </div>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="label">Email</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="" value="{{ old('email') }}" required autocomplete="email">
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
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                            </span>
                                        </div>
                                    </div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation" class="label">Confirm password</label>
                                    <div class="input-group">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" id="password_confirmation" required autocomplete="new-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-block text-center my-3">
                                    <p class="text-small font-weight-semibold">Some password suggestion to better protect your account:</p>
                                    <ul class="striped-list text-left">
                                        <li>Is longer than 10 characters</li>
                                        <li>Does not contain your username.</li>
                                        <li>Is not in this <a href="https://en.wikipedia.org/wiki/List_of_the_most_common_passwords">list of common passwords</a></li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                                </div>
                                <!--<div class="form-group">
                                    <button class="btn btn-block g-login">
                                        <img class="mr-3" src="../../../assets/images/file-icons/icon-google.svg"
                                             alt="">Log in with Google
                                    </button>
                                </div>-->
                                <div class="text-block text-center my-3">
                                    <span class="text-small font-weight-semibold">Already have an account ?</span>
                                    <a href="{{ route('login') }}" class="text-black text-small">Login here.</a>
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
