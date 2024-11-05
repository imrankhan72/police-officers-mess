@extends('layouts.site')
<!-- Header | START -->
@section('content')
<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section light-background">

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="assets/img/slider/slide-1.jpg" class="d-block w-100" alt="Slide 1">
        
    </div>
    <div class="carousel-item">
        <img src="assets/img/slider/slide-2.jpg" class="d-block w-100" alt="Slide 2">
        
    </div>
    <div class="carousel-item">
        <img src="assets/img/slider/slide-3.jpg" class="d-block w-100" alt="Slide 3">
        
    </div>
    <div class="carousel-item">
        <img src="assets/img/slider/slide-4.jpg" class="d-block w-100" alt="Slide 3">
        
    </div>
    <div class="carousel-item">
        <img src="assets/img/slider/slide-5.jpg" class="d-block w-100" alt="Slide 3">
        
    </div>
    <div class="carousel-item">
        <img src="assets/img/slider/slide-6.jpg" class="d-block w-100" alt="Slide 3">
        
    </div>
    <div class="carousel-item">
        <img src="assets/img/slider/slide-7.jpg" class="d-block w-100" alt="Slide 3">
        
    </div>
    <div class="carousel-item">
        <img src="assets/img/slider/slide-8.jpg" class="d-block w-100" alt="Slide 3">
        
    </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>


</section><!-- /Hero Section -->



<!-- About Section -->
<section id="about" class="about section light-background">

<!-- Section Title -->
<section id="welcome" class="container section-title awe-parallax" data-aos="fade-up">
  <p><span>Welcome to</span> <span class="description-title">Police Officers' Mess</span></p>
  <img src="assets/img/icon-accmod.png" alt="icon">
  <p class="fst">
      The Police Officers’ Mess in Bhopal serves as a vital institution that fosters camaraderie and provides space
      for relaxation and professional interaction among law enforcement officers. Located in the heart of Bhopal,
      this mess plays a crucial role in promoting a sense of community within the police force.
  </p>
</section>




<!-- End Section Title -->



<div class="container mt-5" >

<div class="row gy-3">

<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
  <img src="assets/img/7.jpeg" alt="" class="img-fluid">
</div>

<div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
  <div class="about-content ps-0 ps-lg-3">
    <h3 >ABOUT US</h3>
    <span class="box-border"></span>
    <p class="fst">
      The Police Officers' Mess, Bhopal is a prestigious institution designed to provide a comfortable and
      relaxing stay for Police Officers and their guests. The Mess is equipped with a wide range of facilities
      that caters to the various needs of its guests.
    </p>


  </div>

</div>
</div>

</div>



<div class="container" id="home_facilities">
<div class="row gy-3">
<div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
  <div class="about-content ps-0 ps-lg-3">
    <h3>BEST FACILITIES</h3>
    <p class="fst">
      Police Officers' Mess provides its guests with some of the best facilities for a relaxing stay.
    </p>
    <ul class="facility-list">
      <li><img src="assets/img/icons/icon-1.png" alt="icon">Air Conditioning</li>
      <li><img src="assets/img/icons/icon-2.png" alt="icon">Bathroom Slippers</li>
      <li><img src="assets/img/icons/icon-3.png" alt="icon">Bathroom Amenities</li>
      <li><img src="assets/img/icons/icon-4.png" alt="icon">Breakfast Buffet</li>
      <li><img src="assets/img/icons/icon-5.png" alt="icon">Cable TV</li>
      <li><img src="assets/img/icons/icon-6.png" alt="icon">Coffee and Tea Facilities</li>
      <li><img src="assets/img/icons/icon-7.png" alt="icon">Free Wi-Fi</li>
      <li><img src="assets/img/icons/icon-8.png" alt="icon">Complimentary Bottled Water</li>
      <li><img src="assets/img/icons/icon-9.png" alt="icon">Cafeteria</li>
      <li><img src="assets/img/icons/icon-10.png" alt="icon">In-room Safe</li>
      <li><img src="assets/img/icons/icon-11.png" alt="icon">Work Desk</li>
    </ul>
  </div>
</div>

<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
  <img src="assets/img/img-11.jpeg" alt="" class="img-fluid">
</div>
</div>
</div>



</section><!-- /About Section -->


<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section dark-background">

<img src="assets/img/img-13.jpeg" class="testimonials-bg" alt="">

<div class="container" data-aos="fade-up" data-aos-delay="100">

<div class="swiper init-swiper">
<script type="application/json" class="swiper-config">
  {
    "loop": true,
    "speed": 600,
    "autoplay": {
      "delay": 5000
    },
    "slidesPerView": "auto",
    "pagination": {
      "el": ".swiper-pagination",
      "type": "bullets",
      "clickable": true
    }
  }
</script>
<div class="swiper-wrapper">

  <div class="swiper-slide">
    <div class="testimonial-item">
      <img src="assets/img/testimonials/azadsir.jpeg" class="testimonial-img" alt="">
      <h3>Yashowardhan Jha Azad</h3>
      <h4>Ex IPS - Spl.Dir. IB, Secy. Security, GOI</h4>
      <div class="stars">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
      </div>
      <p>
        <i class="bi bi-quote quote-icon-left"></i>
        <span>What an outstanding piece of work this mess is perhaps the best in the Country. Thanks to MP
          Police for following the rich tradition of extending best facility and comfort to even Retd.
          officers. Great job ---Keep it up</span>
        <i class="bi bi-quote quote-icon-right"></i>
      </p>
    </div>
  </div><!-- End testimonial item -->

  <div class="swiper-slide">
    <div class="testimonial-item">
      <img src="assets/img/testimonials/avinashsir.jpeg" class="testimonial-img" alt="">
      <h3>Avinash Chandra </h3>
      <h4>DG Fire and Emg. Services</h4>
      <div class="stars">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
      </div>
      <p>
        <i class="bi bi-quote quote-icon-left"></i>
        <span>I had the opportunity to visit this prestigious mess of Bhopal. I has come up very well with all
          facilities of a 5 star hotel. The ambience is pleasuring and wonderful. The staff here is courious
          and attentive. Very very good experience.</span>
        <i class="bi bi-quote quote-icon-right"></i>
      </p>
    </div>
  </div><!-- End testimonial item -->

  <div class="swiper-slide">
    <div class="testimonial-item">
      <img src="assets/img/testimonials/pawansir.jpeg" class="testimonial-img" alt="">
      <h3>Pawan Deo</h3>
      <h4>IPS</h4>
      <div class="stars">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
      </div>
      <p>
        <i class="bi bi-quote quote-icon-left"></i>
        <span>Came to the mess after a long span of 24 years. Great to see the renovation and the mess
          completely changed in a positive direction like the tradition of MP Police. Wish a great future of
          the Madhya Pradesh Police</span>
        <i class="bi bi-quote quote-icon-right"></i>
      </p>
    </div>
  </div><!-- End testimonial item -->
  <div class="swiper-slide">
    <div class="testimonial-item">
      <img src="assets/img/testimonials/rishisir.jpeg" class="testimonial-img" alt="">
      <h3>Rishi Pal</h3>
      <h4>IPS, Joint Commissioner of Police, Delhi</h4>
      <div class="stars">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
      </div>
      <p>
        <i class="bi bi-quote quote-icon-left"></i>
        <span>Visited for some work and stayed here for a day. Great ambience and good hospitality. Very
          impressive reflection of great tradition and professionalism of mp police,very satisfied,Thanks
        </span>
        <i class="bi bi-quote quote-icon-right"></i>
      </p>
    </div>
  </div>

</div><!-- End testimonial item -->

</div>
<div class="swiper-pagination"></div>
</div>

</div>

</section><!-- /Testimonials Section -->




</main>
@endsection
