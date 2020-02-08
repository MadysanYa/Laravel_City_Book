@extends('master')
@section('title','Login')
@section('content')
<div id="wrapper">
    <div class="content">
        <div class="main-register-holder">
            <div class="main-register fl-wrap">            
                <h3>Forgot Password <span>City<strong>Book</strong></span></h3>
                <div id="tabs-container"> 
                    <div id="tab-1">
                        <div class="custom-form">
                            <form method="post" name="registerform">
                                <label>Username or Email Address * </label>
                                <input name="email" type="text" autocomplete="off"> 
                                <button type="submit" class="log-submit-btn"><span>Reset</span></button> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection