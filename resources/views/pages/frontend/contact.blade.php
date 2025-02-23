@extends('layout.frontend.app')

@section('banner')

 <!-- BANNER SECTION -->
 <section class="float-left w-100 sub-banner-con postion-relative main-box">
    <figure><img src="{{asset('frontassets')}}/images/sub-banner-vector.png" alt="icon" class="position-absolute sub-vector"></figure>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <div class="sub-banner-img-con">
            <figure><img src="{{asset('frontassets')}}/images/contact-banner-img.jpg" alt="image"></figure>
            <!-- sub banner img con -->
          </div>
          <!-- col -->
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="sub-banner-content-wrap">
            <div class="breadcrumb-con d-inline-block">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
              <!-- breadcrumb -->
            </div>
            <h1 class="green-text">
              Our Contact
            </h1>
            <p class="font-weight-light mb-0">Quis autem vel eum iure reprehenderit qui
              ea voluptate velit esse quam nihil molestiae consequatur dolorem.</p>
            <!-- sub banner content wrapper -->
          </div>
          <!-- col -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- banner con -->
  </section>

@endsection

@section('page')


<!-- CONTACT INFO SECTION -->
<section class="float-left w-100 position-relative contact-info-con padding-top padding-bottom main-box text-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md-4 d-flex">
          <div class="white-box background-fff position-relative w-100">
            <figure><img src="{{asset('frontassets')}}/images/work-img.png" alt="icon" class="img-fluid"></figure>
            <h4 class="special barlow-font">Work Time</h4>
            <ul class="list-unstyled p-0">
              <li>Monday - Friday <br>
                11:00 - 00:00</li>
            </ul>
            <!-- white box -->
          </div>
          <!-- col -->
        </div>
        <div class="col-lg-4 col-md-4 d-flex">
          <div class="white-box background-fff position-relative w-100">
            <figure><img src="{{asset('frontassets')}}/images/phone-img.png" alt="icon" class="img-fluid"></figure>
            <h4 class="special barlow-font">Phone</h4>
            <ul class="list-unstyled p-0">
              <li><a href="tel:05899636995823">0-589-96369-95823</a></li>
              <li><a href="tel:082563596471254">0-825-63596-471254</a></li>
            </ul>
            <!-- white box -->
          </div>
          <!-- col -->
        </div>
        <div class="col-lg-4 col-md-4 d-flex">
          <div class="white-box background-fff position-relative w-100">
            <figure><img src="{{asset('frontassets')}}/images/location-img.png" alt="icon" class="img-fluid"></figure>
            <h4 class="special barlow-font">Location</h4>
            <ul class="list-unstyled p-0">
              <li>121 King Street Melbourne, <br> 3000, Australia</li>
            </ul>
            <!-- white box -->
          </div>
          <!-- col -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- contact info con -->
  </section>

  <!-- MAP SECTION -->
  <div class="float-left w-100 position-relative map-con">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.838709675952!2d144.9532000766278!3d-37.81724673423821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1734437269563!5m2!1sen!2s"
            style="border:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <!--  -->
    </div>
    <!--  -->
  </div>
  <!-- RESERVE A TABLE SECTION -->
  <section
    class="float-left w-100 position-relative padding-top padding-bottom main-box reserve-table-con background-f7f9ff contact-form-con">
    <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
      <div class="heading-title-con text-center">
        <span class="d-block special-text green-text playfair-font font-weight-light">Contact Now</span>
        <h2 class="mb-0">Send Us a Message </h2>
        <!-- heading title con -->
      </div>
      <div class="row">
        <div class="col-xl-12 col-lg-12">
          <form class="main-form text-center" method="post" id="contactpage">
            <ul class="list-unstyled p-0 float-left w-100">
              <li>
                <input type="text" placeholder="Name" name="fname" id="fname">
              </li>
              <li>
                <input type="tel" placeholder="Phone" name="phone" id="phone">
              </li>
              <li>
                <input type="email" placeholder="Email" name="email" id="email">
              </li>
              <li>
                <textarea placeholder="Message" name="msg" id="msg"></textarea>
              </li>
            </ul>
            <div class="secondary-button d-inline-block">
              <button type="submit" id="submit">Send Now</button>
            </div>
          </form>
          <!-- col -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
  </section>


@endsection
