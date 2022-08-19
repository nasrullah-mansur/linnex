<!-- Footer start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            @if ($footer)
            <div class="col-lg-3 col-md-6">
                <div class="contact">
                    <h3>Contact Us</h3>
                    {!! $footer->contact !!}
                </div>
            </div>
            @endif
            <div class="col-lg-3 col-md-6">
                <div class="footer-social">
                    <h3>Social Link</h3>
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
            @if ($footer) 
            <div class="col-lg-3 col-md-6">
                <div class="news">
                    <h3>Latest News</h3>
                    {!! $footer->news !!}
                </div>
            </div>
            @endif

            @if ($fb)
            <div class="col-lg-3 col-md-6">
                <div class="facebook-page">
                    <div class="fb-page" data-href="{{ $fb->page }}" data-tabs="timeline" data-width="450px" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/LinnexMobile/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/LinnexMobile/">Linnex Mobile । লিনেক্স মোবাইল</a></blockquote></div>
                </div>
            </div>
            @endif
        </div>
    </div>
    @if ($footer)
    <div class="copyright">
        <p class="mb-0">{!! $footer->copyright !!}</p>
    </div>
    @endif
</footer>
<!-- Footer end -->