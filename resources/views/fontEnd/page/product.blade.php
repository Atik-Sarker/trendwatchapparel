@extends('fontEnd.layouts.master')

@section('content')

<section id="home" class="contact common-body">

    {{-- nav start --}}
    @include('fontEnd.page.nav')
    {{-- nav end --}}
        
      <!--nav menu-->
      <div class="main-content contact-content ">
          
      <div class="product-area">
              <h2 class="common-title">Our product</h2>
              <div class="wow slideInLeft product-mainarea">
                  <div class="row">
                      @forelse ($posts as $post)                             
                      <div class="col-sm-6">
                          <div class="product-item">
                          <img src="{{ asset('public/storage') }}/{{$post->image}}" alt="">
                          </div>
                      </div>
                      @empty
                      <h1 style="color: #fff; text-align: center;">No Data Available</h1>
                      @endforelse
                      <!--product item end-->
                  </div>
              </div>
          </div>
         
      </div>
        
  </section>
  
  <!-- home section end-->
@endsection