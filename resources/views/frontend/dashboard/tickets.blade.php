@extends('frontend.dashboard.layouts.master')

@section('content')
<section id="wsus__dashboard">
  <div class="container-fluid">
    @include('frontend.dashboard.layouts.sidebar')
    <div class="row">
      <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
        <div class="dashboard_content">
          <div class="wsus__dashboard">
            <div class="row">
              <div class="col-xl-4 col-6 col-md-4">
                <a class="wsus__dashboard_item blue" href="{{route('user.tickets')}}">
                  <i class="far fa-dollar-sign"></i>
                  <p>Tickets and Pricing</p>
                </a>
              </div>
              <div class="col-xl-4 col-6 col-md-4">
                <a class="wsus__dashboard_item green" href="{{route('user.agenda')}}">
                  <i class="fal fa-calendar-alt"></i>
                  <p>Agenda</p>
                </a>
              </div>
            
             
              <div class="col-xl-4 col-6 col-md-4">
                <a class="wsus__dashboard_item green" href="{{route('user.profile')}}">
                  <i class="fas fa-user-shield"></i>
                  <p>profile</p>
                </a>
              </div>
             
            </div>
            <div class="row">
              <div class="col-xl-12">
               
                <div class="wsus__message">
                  <h4>Tickets and Pricing</h4>
                  <div class="row">
                    <div class="col-xl-4 col-sm-6 col-lg-4 mx-auto">
                        <div class="wsus__daily_deals_single">
                            <div class="wsus__daily_deals_single_img">
                                <a class="link_img" href="#"> <img src="{{asset('frontend/images/single-ticket.jpeg')}}" alt="offer"
                                        class="img-fluid w-100"></a>
                                <p>up to -70% off</p>
                                {{-- <a class="live" href="#">live now</a> --}}
                            </div>
                            <div class="wsus__daily_deals_text">
                                <a class="deals_title" href="#">Single Ticket</a>
                                <p>sale start date: 07 sep 2023</p>
                                <p>sale end date: 29 nov 2023</p>
                                <a class="common_btn" href="daily_deals_details.html">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-lg-4 mx-auto">
                        <div class="wsus__daily_deals_single">
                            <div class="wsus__daily_deals_single_img">
                                <a class="link_img" href="#"> <img src="{{asset('frontend/images/double-ticket.jpeg')}}" alt="offer"
                                        class="img-fluid w-100"></a>
                                <p>up to -35% off</p>
                                {{-- <a class="live" href="#">live now</a> --}}
                            </div>
                            <div class="wsus__daily_deals_text">
                                <a class="deals_title" href="#">Double Ticket</a>
                                <p>sale start date: 07 sep 2023</p>
                                <p>sale end date: 29 nov 2023</p>
                                <a class="common_btn" href="daily_deals_details.html">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
                 
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection