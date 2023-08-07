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
                  <h4>personal information</h4>
                  <p class="mb-2">Please complete your information</p> 
                  <form action="#">
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="wsus__single_inout">
                          <label>Name</label>
                          <input type="text" placeholder="" value="{{Auth::user()->name}}">
                        </div>
                      </div>
                      <div class="col-xl-12">
                        <div class="wsus__single_inout">
                          <label>Email</label>
                          <input type="email" placeholder="" value="{{Auth::user()->email}}">
                        </div>
                      </div>
                      <div class="col-xl-12">
                        <div class="wsus__single_inout">
                          <label>Phone</label>
                          <input type="phone" placeholder="">
                        </div>
                      </div>
                      <div class="col-xl-12">
                        <div class="wsus__single_inout">
                          <label>Birthdate</label>
                          <input type="text" placeholder="">
                        </div>
                      </div>
                      <div class="col-xl-12">
                        <div class="wsus__single_inout">
                          <label>Country</label>
                          <input type="text" placeholder="">
                        </div>
                      </div>
                      <div class="col-xl-12">
                        <div class="wsus__single_inout">
                          <label>Boxing Position</label>
                          <input type="text" placeholder="">
                        </div>
                      </div>
                      
                      {{-- <div class="col-xl-12">
                        <div class="wsus__single_inout">
                          <label>Address</label>
                          <textarea cols="3" rows="3" placeholder="Write Your Address Here"></textarea>
                        </div>
                      </div>
                      <div class="col-xl-12">
                        <div class="wsus__single_inout">
                          <label>about yourself</label>
                          <textarea cols="3" rows="3" placeholder="Write About Yourself"></textarea>
                        </div>
                      </div> --}}
                    </div>
                    <button class="common_btn" type="submit">update</button>
                  </form>
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