@extends('layouts.site')
<!-- Header | START -->
@section('content')

<section class="container section-title" data-aos="fade-up" style="
    background-image: url(assets/img/img-9.jpeg);
    background-size: cover;
    background-position: center;
    max-width: 1280px;
    padding-top: 68px;">
    <p style="color: white;"><span>GALLERY</span></p>
</section>

<section class="section-gallery bg-white tp_inner_padding" style="    padding-top: 50px;
">
    <div class="gallery">
        <div class="container">
        <div class="popup-gallery" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
    <!-- Looping through 1 to 40 images -->
    <a class="gallery-item" href="assets/img/gallery/1.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/1.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/2.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/2.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/3.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/3.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/4.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/4.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/5.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/5.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/6.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/6.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/7.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/7.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/8.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/8.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/9.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/9.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/10.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/10.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/11.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/11.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/12.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/12.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/13.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/13.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/14.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/14.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/15.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/15.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/16.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/16.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/17.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/17.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/18.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/18.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/19.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/19.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/20.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/20.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/21.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/21.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    
    <a class="gallery-item" href="assets/img/gallery/24.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/24.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/25.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/25.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
   
    <a class="gallery-item" href="assets/img/gallery/27.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/27.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/28.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/28.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/29.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/29.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/30.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/30.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/31.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/31.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/32.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/32.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/33.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/33.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/34.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/34.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/35.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/35.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/36.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/36.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    
    <a class="gallery-item" href="assets/img/gallery/38.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/38.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/39.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/39.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
    <a class="gallery-item" href="assets/img/gallery/40.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
        <img src="assets/img/gallery/40.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
    </a>
</div>

        </div>
    </div>
</section>
@endsection
