@extends('layouts.client')

@section('title-bar')
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Sign in</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="./index.html">Home</a>
                    <span>Sign in</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form id="register_form" method="post" action="{{ route('login.perform') }}">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <h6 class="coupon__code"><span class="icon_tag_alt"></span> Haven't an account? <a href="register.html">Click
                        <b>here</b></a> to register your account</h6>
                        <h6 class="checkout__title">Information</h6>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" id="email" onkeyup="processChangeEmail()" oninput="checkLogin(isRegister)">
                                    <p id="result_email" style="display: none; color: red; font-size: small; font-style: italic; margin-top: -20px;"></p>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Account Password<span>*</span></p>
                            <input type="password" id="password" onkeyup="processChangePassword()" oninput="checkLogin(isRegister)">
                            <p id="result_password" style="display: none; color: red; font-size: small; font-style: italic; margin-top: -20px;"></p>
                        </div>
                    
                    </div>
                </div>
                <button type="submit" class="site-btn btn_register" id="btn_register" disabled="true">SIGN IN</button>
            </form>
        </div>
    </div>
</section>
@endsection