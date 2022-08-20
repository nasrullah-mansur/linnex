<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{-- Title start --}}
            <li class="navigation-header">
                <span>Sections</span>
                <i class="ft-minus"></i>
            </li>
            {{-- Title end --}}

            <li class="nav-item">
                <a href="index.html">
                    <i class="ft-book"></i>
                    <span class="menu-title">Header</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('admin.top.index') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.top.index') }}">Top Bar</a></li>
                    <li class="{{ Route::is('admin.mainMenu') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.mainMenu') }}">Main Menu</a></li>
                    <li class="{{ Route::is('admin.social') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.social') }}">Social</a></li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('admin.slider.*') ? 'active open' : '' }}">
                <a href="index.html">
                    <i class="ft-book"></i>
                    <span class="menu-title">Slider</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('admin.slider.index') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.slider.index') }}">All Items</a></li>
                    <li class="{{ Route::is('admin.slider.create') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.slider.create') }}">Add Item</a></li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('admin.phone.*') ? 'active open' : ''}}">
                <a href="index.html">
                    <i class="ft-book"></i>
                    <span class="menu-title">Smart Phones</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('admin.phone.index') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.phone.index') }}">All Phones</a></li>
                    <li class="{{ Route::is('admin.phone.create') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.phone.create') }}">Add Phone</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="index.html">
                    <i class="ft-book"></i>
                    <span class="menu-title">From Facebook</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('facebook.index') ? 'active' : '' }}"><a class="menu-item" href="{{ route('facebook.index') }}">Edit Facebook Info</a></li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('facility.*') ? 'active open' : '' }}">
                <a href="index.html">
                    <i class="ft-book"></i>
                    <span class="menu-title">Facilities</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('facility.index') ? 'active' : ''}}"><a class="menu-item" href="{{ route('facility.index') }}">All Facilities</a></li>
                    <li class="{{ Route::is('facility.create') ? 'active' : ''}}"><a class="menu-item" href="{{ route('facility.create') }}">Add Facilitie</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="index.html">
                    <i class="ft-book"></i>
                    <span class="menu-title">Footer</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('admin.footer') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.footer') }}">Footer Update</a></li>
                </ul>
            </li>

            {{-- Title start --}}
            <li class="navigation-header">
                <span>Appearance</span>
                <i class="ft-minus"></i>
            </li>
            {{-- Title end --}}
            <li class="nav-item">
                <a href="index.html">
                    <i class="ft-book"></i>
                    <span class="menu-title">Settings</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('admin.appearance') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.appearance') }}">Appearance</a></li>
                    <li class="{{ Route::is('admin.theme') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.theme') }}">Theme</a></li>
                    <li class="{{ Route::is('admin.custom.code') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.custom.code') }}">Custom Code</a></li>
                </ul>
            </li>
            
            {{-- For padding --}}
            <li class="nav-item py-5"></li>
            {{-- For padding --}}
            
        </ul>
    </div>
</div>
