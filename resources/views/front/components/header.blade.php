<!-- Header start -->
<header class="header">
    @if (isset($top))
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ul>
                        @if ($top->email)
                        <li>
                            <a href="mailto:{{ $top->email }}"><i class="far fa-envelope"></i>  {{ $top->email }}</a>
                        </li>
                        @endif
                        @if ($top->service)
                        <li>
                            <a class="color" href="{{ $top->service_link }}">{{ $top->service }}</a>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="contact">
                        @if ($top->phone)
                        <li><a href="tel:{{ $top->phone }}"><i class="fas fa-phone-alt"></i> {{ $top->phone }}</a></li>
                        @endif
                        @if ($top->contact)
                        <li><a class="color" href="{{ $top->contact_link }}">{{ $top->contact }}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="container">
        <div class="main-nav">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset($app ? $app->logo : 'front/assets/images/logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="list">
                @php
                    if($menus) {
                        $pattern = '/,{2,10}/';
                        $m_items = explode(',', preg_replace($pattern, '', $menus->items) );
                        $m_links = explode(',', preg_replace($pattern, '', $menus->links));
                    } else {
                        $m_items = [];
                        $m_links = [];
                    }
                @endphp
                <ul>
                    @foreach ($m_items as $key => $m_item)
                    <li><a href="{{ $m_links[$key] }}">{{ $m_item }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="mobile">
                <i class="las la-bars"></i>
            </div>
            <div class="social">
                @php
                    if($socials) {
                        $pattern = '/,{2,10}/';
                        $s_class_name = explode(',', preg_replace($pattern, '', $socials->class_name) );
                        $s_icon_name = explode(',', preg_replace($pattern, '', $socials->icon_name));
                        $s_links = explode(',', preg_replace($pattern, '', $socials->links));
                    } else {
                        $s_class_name = [];
                        $s_icon_name = [];
                        $s_links = [];
                    }
                @endphp
                <ul>
                    @foreach ($s_class_name as $key => $s_item)
                    <li><a class="{{ $s_class_name[$key] }}" href="{{ $s_links[$key] }}"><i class="{{ $s_icon_name[$key] }}"></i></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Header end -->