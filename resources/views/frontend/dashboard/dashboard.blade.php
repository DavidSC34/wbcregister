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
              <div class="col-xl-2 col-6 col-md-4">
                <a class="wsus__dashboard_item red" href="dsahboard_order.html">
                  <i class="far fa-address-book"></i>
                  <p>order</p>
                </a>
              </div>
              <div class="col-xl-2 col-6 col-md-4">
                <a class="wsus__dashboard_item green" href="dsahboard_download.html">
                  <i class="fal fa-cloud-download"></i>
                  <p>download</p>
                </a>
              </div>
              <div class="col-xl-2 col-6 col-md-4">
                <a class="wsus__dashboard_item sky" href="dsahboard_review.html">
                  <i class="fas fa-star"></i>
                  <p>review</p>
                </a>
              </div>
              <div class="col-xl-2 col-6 col-md-4">
                <a class="wsus__dashboard_item blue" href="dsahboard_wishlist.html">
                  <i class="far fa-heart"></i>
                  <p>wishlist</p>
                </a>
              </div>
              <div class="col-xl-2 col-6 col-md-4">
                <a class="wsus__dashboard_item orange" href="dsahboard_profile.html">
                  <i class="fas fa-user-shield"></i>
                  <p>profile</p>
                </a>
              </div>
              <div class="col-xl-2 col-6 col-md-4">
                <a class="wsus__dashboard_item purple" href="dsahboard_address.html">
                  <i class="fal fa-map-marker-alt"></i>
                  <p>address</p>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12">
               
                <div class="wsus__message">
                  <h4>personal information</h4>
                  <form action="#">
                    <div class="row">
                      <div class="col-xl-6">
                        <div class="wsus__single_inout">
                          <label>first name</label>
                          <input type="text" placeholder="First Name">
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="wsus__single_inout">
                          <label>last name</label>
                          <input type="text" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="wsus__single_inout">
                          <label>email</label>
                          <input type="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="wsus__single_inout">
                          <label>phone</label>
                          <input type="text" placeholder="Phone">
                        </div>
                      </div>
                      <div class="col-xl-12">
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
                      </div>
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