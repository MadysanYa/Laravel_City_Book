@extends('master')
@section('title','Login')
@section('content')
<div id="wrapper">
    <div class="content">
        <div class="main-register-holder">
            <div class="main-register fl-wrap">            
                <h3>Login In <span>City<strong>Book</strong></span></h3>
                <div id="tabs-container"> 
                    <div id="tab-1">
                        <div class="custom-form">
                            <form method="post" action="">
                            @csrf
                                <label>Username or Email Address * </label>
                                <input type="text" name="email" class="@error('email') is-invalid @enderror" autocomplete="off"> 
                                @error('email')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <label>Password * </label>
                                <input type="password" name="password" class="@error('password') is-invalid @enderror" autocomplete="off"> 
                                @error('password')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <button type="submit" class="log-submit-btn"><span>Log In</span></button> 
                                <div class="clearfix"></div>
                                <div class="filter-tags">
                                    <input id="check-a" type="checkbox" name="check">
                                    <label for="check-a">Remember me</label>
                                </div>
                            </form>
                            <div class="lost_password">
                                <a href="#">Lost Your Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection