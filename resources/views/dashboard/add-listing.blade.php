@extends('master')
@section('title','Add Listing')
@section('content')

<div id="wrapper">
    <div class="content">
        <section>
            <div class="container">
                <div class="profile-edit-wrap">
                    <div class="profile-edit-page-header">
                        <h2>Admin Panel</h2>
                    </div>

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-3">
                            @include('dashboard.side-bar')
                        </div>
                        <form method="post" action="{{ route('add.listing') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-7">
                                <div class="profile-edit-container">
                                    <div class="profile-edit-header fl-wrap">
                                        <h4>Listing Information</h4>
                                    </div>
                                    <div class="custom-form">

                                        <label>Listing Title <i class="fa fa-user-o"></i></label>
                                        <input type="text" class="@error('title') is-invalid @enderror" name="title" placeholder="Title">
                                        @error('title')
                                            <div class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email<i class="fa fa-phone"></i></label>
                                                <input type="text" class="@error('email') is-invalid @enderror" placeholder="Email" name="email">
                                                @error('email')
                                                    <div class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label>Phone<i class="fa fa-map-marker"></i></label>
                                                <input type="text" class="@error('phone') is-invalid @enderror" placeholder="Phone"name="phone"> 
                                                @error('phone')
                                                    <div class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <label>Listing Location <i class="fa fa-map-marker"></i></label>
                                        <input type="text" class="@error('location') is-invalid @enderror" placeholder="Location" name="location">
                                        @error('location')
                                            <div class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Listing Category</label>
                                                <select class="chosen-select" name="category">
                                                    <option value="1">Restaurants</option>
                                                    <option value="2">Shops</option>
                                                    <option value="3">Hotels</option>
                                                    <option value="4">Fitness</option>
                                                    <option value="5">Events</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Listing Rating</label>
                                                <select class="chosen-select" name="rate">
                                                    <option value="2">2 Star</option>
                                                    <option value="3">3 Star</option>
                                                    <option value="4">4 Star</option>
                                                    <option value="5">5 Star</option>
                                                </select>
                                            </div>
                                        </div>

                                        <label>Listing Adress <i class="fa fa-map-marker"></i></label>
                                        <input type="text" class="@error('address') is-invalid @enderror" placeholder="Address" name="address">
                                        @error('address')
                                            <div class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Listing Review<i class="fa fa-phone"></i></label>
                                                <input type="text" class="@error('address') is-invalid @enderror" placeholder="Review" name="review">
                                                @error('review')
                                                    <div class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label>Listing Photo <i class="fa fa-map-marker"></i></label>
                                                <input type="text" class="@error('image') is-invalid @enderror" placeholder="Listing Photo"name="image"> 
                                                @error('image')
                                                    <div class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <label>Listing Description </label>                                              
                                        <textarea cols="40" rows="3" class="@error('description')is-invalid @enderror"  placeholder="About Listing" name="description"></textarea>
                                        @error('description')
                                            <div class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <button type="submit" class="btn big-btn color-bg flat-btn">Save</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="edit-profile-photo fl-wrap">
                                    <img src="images/avatar/4.jpg" class="respimg" alt="">
                                    <div class="change-photo-btn">
                                        <div class="photoUpload">
                                            <span><i class="fa fa-upload"></i> Listing Photo</span>
                                            <input type="file" class="upload" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>

        <div class="limit-box fl-wrap"></div>

    </div>
</div>
@endsection