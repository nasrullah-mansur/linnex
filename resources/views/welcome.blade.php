@extends('front.layout')

@section('content')
<!-- Slider start -->
<div class="slider">
    <div class="container">
        <div class="slider-content">
            @foreach ($sliders as $slider)
            <div class="slider-item">
                <img class="w-100" src="{{ asset($slider->image) }}" alt="slider">
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Slider end -->

<!-- Category start -->
<div class="category">
    <div class="container">
        <div class="category-content">
            <div class="row">
                @foreach ($phones as $phone)
                <div class="col-md-4">
                    <div class="category-item">
                        <a href="#"><img class="w-100" src="{{ asset($phone->image) }}" alt="category"></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Category end -->

<!-- Marketing start -->
<section class="marketing">
    <div class="container">
        <div class="row">
            @if ($fb)
            <div class="col-lg-8">
                <div class="video">
                    <h2>EXPLORE LINNEX MOBILE</h2>
                    <div class="ratio ratio-16x9">
                        <iframe src="{{ $fb->video }}" style="border:none; overflow:hidden; width: 100%;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="facebook">
                    <h2>FOLLOW US ON FACEBOOK</h2>
                    <div class="fb-page m-auto" data-href="{{ $fb->page }}" data-tabs="timeline" data-width="500" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/LinnexMobile/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/LinnexMobile/">Linnex Mobile । লিনেক্স মোবাইল</a></blockquote></div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
<!-- Marketing end -->

<!-- Facility start -->
<section class="facility">
    <div class="container">
        <div class="section-title">
            <h2>Care That Makes a Difference</h2>
        </div>
        <div class="content">
            <div class="row">
                @foreach ($facilities as $facility)
                <div class="col-sm-4">
                    <div class="facility-item">
                        <img class="w-100" src="{{ asset($facility->image) }}" alt="facility">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Facility end -->
@endsection