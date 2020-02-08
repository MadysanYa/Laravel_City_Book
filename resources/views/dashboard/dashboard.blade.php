@extends('master')
@section('title','Dashboard')
@section('content')
<!-- <div id="wrapper">
    <div class="content">
        <div class="main-register-holder">
            <div class="main-register text-center">            
                <h3 class="text-center">Dashboard <span>City<strong>Book</strong></span></h3>
                <div id="tabs-container">  
                    <div class="tab">
                        <div id="tab-2" class="tab-content" style="display: block;">
                            <div class="custom-form">
                                <form method="post" action="{{ route('dashboard') }}" class="main-register-form" id="main-register-form2">
                                @csrf
                                    <label>Title *</label>
                                    <input name="title" type="text" autocomplete="off" autofocus>
                                    <label>Description *</label>
                                    <input name="description" type="text" autocomplete="off">                                              
                                    <label>Image *</label>
                                    <input name="image" type="text" autocomplete="off"> 
                                    <button type="submit" class="log-submit-btn"><span>Submit</span></button> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div id="wrapper">
    <div class="content">
        <section>
            <div class="container">
                <div class="profile-edit-wrap">
                    <div class="profile-edit-page-header">
                        <h2>Admin Panel</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            @include('dashboard.side-bar')
                        </div>
                        <div class="col-md-9">
                            <div class="profile-edit-container">
                                <div class="profile-edit-header fl-wrap" style="margin-top:30px">
                                    <h4>Hello , <span>{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}</span></h4>
                                </div>

                                <div class="statistic-container fl-wrap">

                                    <div class="statistic-item-wrap">
                                        <div class="statistic-item gradient-bg fl-wrap">
                                            <i class="fa fa-map-marker"></i>
                                            <div class="statistic-item-numder">21</div>
                                            <h5>Active Listings</h5>
                                        </div>
                                    </div>

                                    <div class="statistic-item-wrap">
                                        <div class="statistic-item gradient-bg fl-wrap">
                                            <i class="fa fa fa-eye"></i>
                                            <div class="statistic-item-numder">1054</div>
                                            <h5>Listing Views</h5>
                                        </div>
                                    </div>

                                    <div class="statistic-item-wrap">
                                        <div class="statistic-item gradient-bg fl-wrap">
                                            <i class="fa fa-comments-o"></i>
                                            <div class="statistic-item-numder">675</div>
                                            <h5>Total Reviews</h5>
                                        </div>
                                    </div>

                                    <div class="statistic-item-wrap">
                                        <div class="statistic-item gradient-bg fl-wrap">
                                            <i class="fa fa-heart-o"></i>
                                            <div class="statistic-item-numder">154</div>
                                            <h5>Times Bookmarked</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="dashboard-list-box fl-wrap activities">
                                <div class="dashboard-header fl-wrap">
                                    <h3>Recent Activities</h3>
                                </div>

                                <div class="dashboard-list">
                                    <div class="dashboard-message">
                                        <span class="new-dashboard-item"><i class="fa fa-times"></i></span>
                                        <div class="dashboard-message-text">
                                            <p><i class="fa fa-check"></i> Your listing <a href="#">Luxury Restourant</a> has been approved! </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard-list">
                                    <div class="dashboard-message">
                                        <span class="new-dashboard-item"><i class="fa fa-times"></i></span>
                                        <div class="dashboard-message-text">
                                            <p><i class="fa fa-heart"></i>Someone bookmarked your <a href="#">Event In City Mol</a> listing!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard-list">
                                    <div class="dashboard-message">
                                        <span class="new-dashboard-item"><i class="fa fa-times"></i></span>
                                        <div class="dashboard-message-text">
                                            <p><i class="fa fa-comments-o"></i> Someone left a review on <a href="#">Gym in the Center</a> listing!</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="limit-box fl-wrap"></div>

    </div>
</div>

@endsection