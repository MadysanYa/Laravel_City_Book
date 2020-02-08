@extends('master')
@section('title','Home')
@section('content')

@if(count($listings) >0)
    <div id="wrapper">
        <div class="content">

            <!-- <div class="map-container fw-map">
                <div id="map-main"></div>
                <ul class="mapnavigation">
                    <li><a href="#" class="prevmap-nav">Prev</a></li>
                    <li><a href="#" class="nextmap-nav">Next</a></li>
                </ul>
                <div class="scrollContorl mapnavbtn" title="Enable Scrolling"><span><i class="fa fa-lock"></i></span></div>  						
            </div> -->

            <section class="gray-bg no-pading no-top-padding">
                <div class="col-list-wrap  center-col-list-wrap left-list">
                    <div class="container">
                        <div class="listsearch-maiwrap box-inside fl-wrap">
                            <div class="listsearch-header fl-wrap">
                                <h3>Results For : <span>All Listings</span></h3>
                                <div class="listing-view-layout">
                                    <ul>
                                        <li><a class="grid active" href="#"><i class="fa fa-th-large"></i></a></li>
                                        <li><a class="list" href="#"><i class="fa fa-list-ul"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="listsearch-input-wrap fl-wrap">
                                <div class="listsearch-input-item">
                                    <i class="mbri-key single-i"></i>
                                    <input type="text" placeholder="Keywords?" value=""/>
                                </div>
                                <div class="listsearch-input-item">
                                    <select data-placeholder="Location" class="chosen-select" >
                                        <option>All Locations</option>
                                        <option>Bronx</option>
                                    </select>
                                </div>
                                <div class="listsearch-input-item">
                                    <select data-placeholder="All Categories" class="chosen-select" >
                                        <option>All Categories</option>
                                        <option>Shops</option>
                                        <option>Hotels</option>
                                    </select>
                                </div>
                                <div class="listsearch-input-text" id="autocomplete-container">
                                    <label><i class="mbri-map-pin"></i> Enter Addres </label>
                                    <input type="text" placeholder="Destination , Area , Street"/>
                                    <a  href="#"  class="loc-act qodef-archive-current-location"><i class="fa fa-dot-circle-o"></i></a>
                                </div>

                                <div class="hidden-listing-filter fl-wrap">
                                    <div class="distance-input fl-wrap">
                                        <div class="distance-title"> Radius around selected destination <span></span> km</div>
                                        <div class="distance-radius-wrap fl-wrap">
                                            <input class="distance-radius rangeslider--horizontal" type="range" min="1" max="100" step="1" value="1" data-title="Radius around selected destination">
                                        </div>
                                    </div>

                                    <div class=" fl-wrap filter-tags">
                                        <h4>Filter by Tags</h4>
                                        <div class="filter-tags-wrap">
                                            <input id="check-a" type="checkbox" name="check" checked>
                                            <label for="check-a">Elevator in building</label>
                                        </div>
                                        <div class="filter-tags-wrap">
                                            <input id="check-b" type="checkbox" name="check">
                                            <label for="check-b">Friendly workspace</label>
                                        </div>
                                        <div class="filter-tags-wrap">
                                            <input id="check-c" type="checkbox" name="check">
                                            <label for="check-c">Instant Book</label>
                                        </div>
                                        <div class="filter-tags-wrap">
                                            <input id="check-d" type="checkbox" name="check">
                                            <label for="check-d">Wireless Internet</label>
                                        </div>
                                    </div>
                                </div>

                                <button class="button fs-map-btn">Update</button>
                                <div class="more-filter-option">More Filters <span></span></div>
                            </div>

                        </div>
                        <div class="list-main-wrap fl-wrap card-listing">
                        
                            @foreach($listings as $listing)
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <img src="{{ asset('images/all')}}/{{$listing['image'] }}" alt="">
                                        <div class="overlay"></div>
                                        <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap">
                                        <a class="listing-geodir-category" href="#">{{ $listing['category'] }}</a>
                                        <div class="listing-avatar"><a href="#"><img src="{{asset('images/avatar/5.jpg')}}" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                        </div>
                                        <h3><a href="{{ route('app.listing',['id' => $listing['id']]) }}">{{ $listing['title'] }}</a></h3>
                                        <p>{{ $listing['description'] }}</p>
                                        <div class="geodir-category-options fl-wrap">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="{{ $listing['rate'] }}">
                                                <span>({{ $listing['review'] }} reviews)</span>
                                            </div>
                                            <div class="geodir-category-location"><a href="#0" class="map-item scroll-top-map"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$listing['address']}}</a></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach

                            <div class="pagination_cutomize">
                                {{ $listings->links() }}
                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <section class="gradient-bg">
                <div class="cirle-bg">
                    <div class="bg" data-bg="images/bg/circle.png"></div>
                </div>
                <div class="container">
                    <div class="join-wrap fl-wrap">
                        <div class="row">
                            <div class="col-md-8">
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
@else
    @include('frontend.error-404')
@endif

@endsection