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
                  <h4>Agenda</h4>
                  <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <img src="{{asset('frontend/images/telegram-qr.png')}}" alt="logo" class="img-fluid">
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