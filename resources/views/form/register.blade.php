@extends('master')
@section('title','Register')
@section('content')
<div id="wrapper">
    <div class="content">
        <div class="main-register-holder">
            <div class="main-register text-center">            
                <h3 class="text-center">Regiter <span>City<strong>Book</strong></span></h3>
                <div id="tabs-container">  
                    <div class="tab">
                        <div id="tab-2" class="tab-content" style="display: block;">
                            <div class="custom-form">
                                <form method="post" action="{{ route('register') }}" class="main-register-form" id="main-register-form2">
                                @csrf
                                    <label>Name *</label>
                                    <input type="text" name="name" class="@error('name') is-invalid @enderror" autocomplete="off" autofocus>
                                    @error('name')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <label>Email Address *</label>
                                    <input type="text" name="email" class="@error('email') is-invalid @enderror" autocomplete="off">        
                                    @error('email')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <label>Password *</label>
                                    <input type="password" name="password" class="@error('password') is-invalid @enderror" autocomplete="off"> 
                                    @error('password')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <label>Confirm Password *</label>
                                    <input type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror" autocomplete="off"> 
                                    @error('password_confirmation')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <button type="submit" class="log-submit-btn"><span>Register</span></button> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection