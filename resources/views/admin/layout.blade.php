<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        @include('admin.components.head')
    </head>
    <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
        {{-- Header start --}} 
        @include('admin.components.header') 
        {{-- Header end --}} 
        
        {{-- Main menu start --}} 
        @include('admin.components.menu') 
        {{-- Main menu end --}}

        <div class="app-content content">
            <div class="alert-area">
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    <strong>Well done!</strong> {{ Session::get('success') }}
                </div>
                @endif
            </div>
            @yield('content')
        </div>

        {{-- Footer start --}} 
        @include('admin.components.footer') 
        {{-- Footer end --}} 
        
        {{-- Script start --}} 
        @include('admin.components.script') 
        {{-- Script end --}}


        
        
    </body>
</html>
