<div class="fixed-bar fl-wrap" style="z-index: auto; position: relative; top: 0px;">
    <div class="user-profile-menu-wrap fl-wrap">
        <div class="user-profile-menu">
            <h3>Main</h3>
            <ul>
                <li><a href="{{ route('dashboard')  }}" class="{{ Route::currentRouteName() == 'dashboard' ? 'user-profile-act' : '' }}"><i class="fa fa-gears"></i>Dashboard</a></li>
                <li><a href="{{ route('add.listing') }}" class="{{ Route::currentRouteName() == 'add.listing' ? 'user-profile-act' : '' }}"><i class="fa fa-plus-square-o"></i>Add Listing</a></li>													
            </ul>
        </div>
        <form method="post" action="{{ route('logout') }}">
            @csrf
        </form>
        <a href="{{ route('logout') }}" class="log-out-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
    </div>
</div>
<div style="display: none; width: 284px; height: 221px; float: none;"></div>