@extends('master')
@section('title','Listing')
@section('content')
<div id="wrapper">
    <div class="content">

        <div class="list-single-carousel-wrap fl-wrap" id="sec1">
            <div class="fw-carousel fl-wrap full-height lightgallery">
                                @for($slide = 1; $slide <=5; $slide++)
                <div class="slick-slide-item">
                    <div class="box-item">
                        <img  src="{{ asset('images/all') }}/{{ $listing['image'] }}"   alt="">
                        <a href="{{ asset('images/all') }}/{{ $listing['image'] }}" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                @endfor
            </div>
            <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
            <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
        </div>

        <div class="scroll-nav-wrapper fl-wrap">
            <div class="container">
                <nav class="scroll-nav scroll-init">
                    <ul>
                        <li><a class="act-scrlink" href="#sec1">Gallery</a></li>
                        <li><a href="#sec2">Details</a></li>
                        <li><a href="#sec3">Video </a></li>
                        <li><a href="#sec4">Reviews</a></li>
                    </ul>
                </nav>
                <a href="#" class="save-btn"> <i class="fa fa-heart"></i> Save </a>
            </div>
        </div>

        <section class="gray-section no-top-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="list-single-main-wrapper fl-wrap" id="sec2">
                            <div class="breadcrumbs gradient-bg  fl-wrap"><a href="#">Home</a><a href="#">Listings</a><span>Listing Single</span></div>
                            <div class="list-single-header list-single-header-inside fl-wrap">
                                <div class="container">
                                    <div class="list-single-header-item">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="list-single-header-item-opt fl-wrap">
                                                    <div class="list-single-header-cat fl-wrap">
                                                        <a href="#">{{ $listing->category ? $listing->category->name : N/A }}</a>
                                                    </div>
                                                </div>

                                                <h2>{{ $listing['title'] }} <span> - Posted By </span><a href="#">{{ $listing->user ? $listing->user->name : N/A }}</a> </h2>
                                                <span class="section-separator"></span>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="{{ $listing['rate'] }}">
                                                    <span>({{ $listing['review'] }} reviews)</span>
                                                </div>
                                                <div class="list-post-counter single-list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="fl-wrap list-single-header-column">
                                                    <span class="viewed-counter"><i class="fa fa-eye"></i> Viewed -  {{ $listing['review'] }} </span>
                                                    <a class="custom-scroll-link" href="#sec5"><i class="fa fa-hand-o-right"></i>Add Review </a>
                                                    <div class="share-holder hid-share">
                                                        <div class="showshare"><span>Share </span><i class="fa fa-share"></i></div>
                                                        <div class="share-container  isShare"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list-single-facts fl-wrap gradient-bg">
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <i class="fa fa-home"></i>
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="45">0</div>
                                            </div>
                                        </div>
                                        <h6>Hotel Rooms</h6>
                                    </div>
                                </div>

                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <i class="fa fa-male"></i>
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="2557">0</div>
                                            </div>
                                        </div>
                                        <h6>Happy customers every year</h6>
                                    </div>
                                </div>

                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <i class="fa fa-cutlery"></i>
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="5">0</div>
                                            </div>
                                        </div>
                                        <h6>Restorans Inside</h6>
                                    </div>
                                </div>   

                            </div>

                            <div class="list-single-main-item fl-wrap">
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>About Hotel </h3>
                                </div>
                                <p>{{$listing['description']}}</p>
                                <a href="#" class="btn transparent-btn float-btn">Visit Website <i class="fa fa-angle-right"></i></a>
                                <span class="fw-separator"></span>
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Amenities</h3>
                                </div>
                                <div class="listing-features fl-wrap">
                                    <ul>
                                        @foreach($listing->features as $feature)
                                            <li><i class="fa fa-wifi"></i>{{ $feature->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <span class="fw-separator"></span>
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Tags</h3>
                                </div>
                                <div class="list-single-tags tags-stylwrap">
                                    @foreach($listing->tags as $tag)
                                        <a href="#">{{ $tag->name }}</a>
                                    @endforeach                                                                             
                                </div>
                            </div>

                            <div class="list-single-main-item fl-wrap" id="sec3">
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Promo Video</h3>
                                </div>
                                <div class="iframe-holder fl-wrap">
                                    <div class="resp-video">
                                        {!! $video !!}
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box-widget-wrap">

                            <div class="box-widget-item fl-wrap">
                                <div class="box-widget-item-header">
                                    <h3>Working Hours : </h3>
                                </div>
                                <div class="box-widget opening-hours">
                                    <div class="box-widget-content">
                                        <span class="current-status"><i class="fa fa-clock-o"></i> Now Open</span>
                                        <ul>
                                            <li><span class="opening-hours-day">Monday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>
                                            <li><span class="opening-hours-day">Tuesday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>
                                            <li><span class="opening-hours-day">Wednesday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>
                                            <li><span class="opening-hours-day">Thursday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>
                                            <li><span class="opening-hours-day">Friday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>
                                            <li><span class="opening-hours-day">Saturday </span><span class="opening-hours-time">9 AM - 3 PM</span></li>
                                            <li><span class="opening-hours-day">Sunday </span><span class="opening-hours-time">Closed</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="box-widget-item fl-wrap">
                                <div class="box-widget-item-header">
                                    <h3>Book a Reservation: </h3>
                                </div>
                                <div class="box-widget opening-hours">
                                    <div class="box-widget-content">
                                        <form   class="add-comment custom-form">
                                            <fieldset>
                                                <label><i class="fa fa-user-o"></i></label>
                                                <input type="text" placeholder="Your Name *" value=""/>
                                                <div class="clearfix"></div>
                                                <label><i class="fa fa-envelope-o"></i>  </label>
                                                <input type="text" placeholder="Email Address*" value=""/>
                                                <div class="quantity fl-wrap">
                                                    <span><i class="fa fa-user-plus"></i>Persons : </span>
                                                    <div class="quantity-item">
                                                        <input type="button" value="-" class="minus">
                                                        <input type="text"    name="quantity"   title="Qty" class="qty" min="1" max="3" step="1" value="1">
                                                        <input type="button" value="+" class="plus">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">                               
                                                        <label><i class="fa fa-calendar-check-o"></i>  </label>
                                                        <input type="text" placeholder="Date" class="datepicker"   data-large-mode="true" data-large-default="true"   value=""/>
                                                    </div>
                                                    <div class="col-md-6"> 
                                                        <label><i class="fa fa-clock-o"></i>  </label>
                                                        <input type="text" placeholder="Time" class="timepicker" value="12:00 am"/>
                                                    </div>
                                                </div>
                                                <textarea cols="40" rows="3" placeholder="Additional Information:"></textarea>
                                            </fieldset>
                                            <button class="btn  big-btn  color-bg flat-btn book-btn">Book Now<i class="fa fa-angle-right"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="limit-box fl-wrap"></div>

        <section class="gradient-bg">
            <div class="cirle-bg">
                <div class="bg" data-bg="images/bg/circle.png"></div>
            </div>
            <div class="container">
                <div class="join-wrap fl-wrap">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- <table>
                                <tbody>
                                    <tr>
                                        @foreach($listing->photos as $photo)
                                            <td>{{ $photo->name }}</td>
                                            <td>{{ count($listing->photos) }}</td>
                                        @endforeach
                                    </tr>
                                    <tr>{{ $listing->user->name }}</tr>
                                </tbody>
                            </table> -->

                            <h3>Join our online community</h3>
                            <p>Grow your marketing and be happy with your online business</p>
                        </div>
                        <div class="col-md-4"><a href="{{ route('login') }}" class="join-wrap-btn">Login <i class="fa fa-sign-in"></i></a></div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection