@extends('fontEnd.layouts.master')

@section('content')

<section id="home">
    <div id="slider">
        <div class=" main-slider owl-carousel">
            @foreach($sliders as $slider)
            <div class="slider-item">
                <img src="{{ asset('public/storage') }}/{{ $slider->slider_image }}">
                <div class="slider-text">
                    <h1>
                        {{ $slider->slider_title }}
                    </h1>
                </div>
            </div>
            @endforeach
            <!--slider-item end-->
        </div>
        <!-- End Carousel -->
    </div>
    <!--Slider end-->

    <!-- nav start -->
    @include('fontEnd.page.nav')
     <!-- nav end  -->
    
</section>
    
@endsection