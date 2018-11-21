@extends('fontEnd.layouts.master')

@section('content')

<section id="home" class="contact common-body">

    {{-- nav start --}}
    @include('fontEnd.page.nav')
    {{-- nav end --}}
        
      <!--nav menu-->
      <div class="main-content contact-content ">
          <h2 class="common-title">Send Message</h2>
          
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
      <form class="default-form contact-form wow slideInLeft" name="contact_form" method="POST" action="{{route('contact.us')}}">
        @csrf
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <input  class="form-control form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Your name"  name="name" type="text">

                          @if ($errors->has('name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                         @endif
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <input  class="form-control" placeholder="Email"  name="email" type="text">
                          @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                            @endif
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <input  class="form-control" placeholder="your company"  name="company" type="text">
                          
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <input  class="form-control" placeholder="Website" type="url" name="url">
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <input  class="form-control" placeholder="street"  type="text" name="street">
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <select  id="" class="form-control" name="country">
                              <option value="Bangladesh">Bangladesh</option>
                              <option value="India">India</option>
                              <option value="Nepal">Nepal</option>
                              <option value="America">America</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <input class="form-control" placeholder="Mobile Number"  type="text" name="phone">
                          @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                            @endif
                      </div>
                      <div class="form-group">
                          <textarea  class="form-control textarea" rows="8" placeholder="Messgae" name="message"></textarea>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn-style-one">Send Message</button>
                          @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                            @endif
                      </div>
                  </div>
              </div>
          </form>

          <div class="quick-contact">
                <ul class="contact-details">
                    <li>
                        <p class="office-title">Canada office</p>
                        <p><i class="fa fa-map-marker"></i><span> 46 Brimley Road, Toronto, ON, M1M 3H6,Canada </span></p>
                        <p><i class="fa fa-phone"></i>Contact:  +1 647 802 8556 </p>
                        <p><i class="fa fa-envelope-o"></i>Email: info@trendwatchapparel.com</p>
                        <p><i class="fa fa-globe"></i>Web Site: www.trendwatchapparel.com </p>
                    </li>
                    <li>
                        <p class="office-title">Bangladesh office</p>
                        <p><i class="fa fa-map-marker"></i><span>Ground Floor, House No.: 13 Road: 01, Block: G Rampura Banasree Dhaka: 1219</span></p>
                        <p><i class="fa fa-phone"></i>Contact: +88 01712 012 123 </p>
                        <p><i class="fa fa-envelope-o"></i>Email: info@trendwatchapparel.com </p>
                        <p><i class="fa fa-globe"></i>Web Site: www.trendwatchapparel.com</p>
                    </li>
                    <li>
                        <p class="office-title">Contact Person</p>
                        <p><i class="fa fa-user-o"></i><span> Zia Sarker </span></p>
                        <p><i class="fa fa-black-tie"></i>Chief Executive Officer</p>
                        <p><i class="fa fa-phone"></i>Canada Cell: +1 64-802-85567</p>
                        <p><i class="fa fa-phone"></i>BD Cell: +88 01962 13 91 29</p>
                        <p><i class="fa fa-envelope-o"></i>Email: zia@trendwatchapparel.com</p>
                        <p><i class="fa fa-"></i></p>
                    </li>
                    
                    <li>
                        <p class="office-title">Contact Person</p>
                        <p><i class="fa fa-user-o"></i><span> Masudul Haque Masud </span></p>
                        <p><i class="fa fa-black-tie"></i>Director- Sourcing & Operation. </p>
                        <p><i class="fa fa-phone"></i>Cell 1: +88-01707 51 52 53 </p>
                        <p><i class="fa fa-phone"></i>Cell 2: +88-01911 51 52 53 </p>
                        <p><i class="fa fa-envelope-o"></i>Email: masud@trendwatchapparel.com</p>
                    </li>
                    <li>
                        <p class="office-title">Contact Person</p>
                        <p><i class="fa fa-user-o"></i><span> Aminul Haque </span></p>
                        <p><i class="fa fa-black-tie"></i>Director- Marketing & Merchandising </p>
                        <p><i class="fa fa-phone"></i>Cell 1: +88-01716 62 14 85 </p>
                        <p><i class="fa fa-envelope-o"></i>Email: aminul@trendwatchapparel.com</p>
                    </li>
                    
                    <li>
                        <p class="office-title">Contact Person</p>
                        <p><i class="fa fa-user-o"></i><span> Prodip Kumar Bhowmik</span></p>
                        <p><i class="fa fa-black-tie"></i>Director- Marketing & Merchandising </p>
                        <p><i class="fa fa-phone"></i>Cell 1: +88-01916 66 51 23 </p>
                        <p><i class="fa fa-envelope-o"></i>Email: prodip@trendwatchapparel.com</p>
                    </li>
                </ul>
            </div>
          <!--quick contact end-->
      </div>
        
  </section>
  
  <!-- home section end-->
@endsection