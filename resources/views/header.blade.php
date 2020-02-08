<div class="loader-wrap">
    <div class="pin"></div>
    <div class="pulse"></div>
</div>

<div id="main">
    <header class="main-header dark-header fs-header sticky">
        <div class="header-inner">
            <div class="logo-holder">
                <a href="/"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="header-search vis-header-search">
                <form action="{{ route('app.listings') }}">
                    <div class="header-search-input-item">
                        <input type="text" name="search" value="{{ Request::input('search') }}" placeholder="Keywords" value=""/>
                    </div>
                    <div class="header-search-select-item">
                        <select data-placeholder="All Categories" class="chosen-select" >
                            <option>All Categories</option>
                            <option>Shops</option>
                            <option>Hotels</option>
                            <option>Restaurants</option>
                            <option>Fitness</option>
                            <option>Events</option>
                        </select>
                    </div>
                    <button type="submit" class="header-search-button-customize">Search</button>
                </form>
            </div>
            <div class="show-search-button"><i class="fa fa-search"></i> <span>Search</span></div>
            <!--  navigation -->
            <div class="nav-holder main-menu">
                <nav>
                    <ul>
                        <li><a href="{{ route('app.home') }}" class="{{ Route::currentRouteName() == 'app.home' ? 'act-link' : '' }}">Home</a></li>
                        <li><a href="{{ route('app.listings') }}" class="{{ Route::currentRouteName() == 'app.listings' || Route::currentRouteName() == 'listing' ? 'act-link' : '' }}">Listings</a></li>
                        <li><a href="{{ route('app.about') }}" class="{{ Route::currentRouteName() == 'app.about' ? 'act-link' : '' }}">About</a></li>
                        <li><a href="{{ route('app.contact') }}" class="{{ Route::currentRouteName() == 'app.contact' ? 'act-link' : '' }}">Contact</a></li>
                    @guest
                        <li><a href="{{ route('login') }}" class="{{ Route::currentRouteName() == 'login' ? 'act-link' : '' }}">Login</a></li>
                        <li><a href="{{ route('register') }}" class="{{ Route::currentRouteName() == 'register' ? 'act-link' : '' }}">Register</a></li>
                    @else    
                        <li><a href="#">{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}<i class="fa fa-caret-down"></i></a>
                            <ul> 
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>                                    
                                </li>                  
                            </ul>
                        </li>
                    @endguest
                    </ul>
                </nav>
            </div>
            <!-- navigation  end -->
        </div>
    </header>