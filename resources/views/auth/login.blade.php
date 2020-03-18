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
                            <form action="#">
                                <div class="form-group">
                                    <label for="username" class="label">Username</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="label">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="*********">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                                </div>
                                <div class="form-group d-flex justify-content-between">
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"> Keep me signed in <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <a href="#" class="text-small forgot-password text-black">Forgot Password ?</a>
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
