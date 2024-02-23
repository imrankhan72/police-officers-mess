@extends('layouts.site')
<!-- Header | START -->
@section('content')


<section class="section-sub-banner bg-9">
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Photo Gallery</h2>
                    </div>
                </div>

            </div>

        </section>
    <!-- GALLERY -->
    <section class="section-gallery bg-white tp_inner_padding">
        <div class="gallery">
            <h2 class="heading text-center">GALLERY</h2>
            <div class="container">
               <!--  <ul class="nav nav-tabs">
                    <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#ground">Hotel & Ground</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#gym">Gym</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#dining">Dining</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#party-hall">Party Hall</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#roof-top">Roof Top</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#hotel-lawns">Rooms</a></li>
                </ul>
                -->
                <div class="tab-content" style="margin-top: 20px;">
                    <div id="ground" class="tab-pane fade show active in ">
                        
                        <div class="popup-gallery" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                            

                           <!--  <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-11.jpeg" title="hotel-lawn 1" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-11.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-2.jpeg" title="hotel-lawn 2" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-2.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-3.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-3.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-4.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-4.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-5.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-5.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-6.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-6.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-7.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-7.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-8.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-8.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-9.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-9.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-10.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-10.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-1.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-1.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-12.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-12.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-13.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-13.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-14.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-14.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a> -->
                           

                            <!-- rooms start -->

                            <!--  <a class="gallery-item" href="/assets/images/accomodations/room-1.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/accomodations/room-1.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/accomodations/room-2.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/accomodations/room-2.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/accomodations/room-3.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/accomodations/room-3.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/accomodations/room-4.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/accomodations/room-4.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/accomodations/room-5.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/accomodations/room-5.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/accomodations/room-6.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/accomodations/room-6.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a> -->

                            <!-- rooms end -->

                             <!-- restaurant -->

                            <!--  <a class="gallery-item" href="/assets/images/restaurant/restaurant-1.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/restaurant/restaurant-1.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/restaurant/restaurant-2.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/restaurant/restaurant-2.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/restaurant/restaurant-3.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/restaurant/restaurant-3.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/restaurant/restaurant-4.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/restaurant/restaurant-4.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/restaurant/restaurant-5.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/restaurant/restaurant-5.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
 -->
                            <!-- restaurant end -->


                            <!-- mix -->

                             <a class="gallery-item" href="/assets/images/main-gallery/1.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/1.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                           

                             <a class="gallery-item" href="/assets/images/main-gallery/3.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/3.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/4.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/4.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/5.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/5.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/6.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/6.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/7.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/7.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/8.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/8.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/9.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/9.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/10.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/10.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/11.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/11.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/12.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/12.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/13.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/13.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/14.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/14.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/15.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/15.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                             <a class="gallery-item" href="/assets/images/main-gallery/16.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/16.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/17.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/17.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/18.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/18.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/19.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/19.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/20.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/20.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            

                             <a class="gallery-item" href="/assets/images/main-gallery/21.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/21.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>



                             <a class="gallery-item" href="/assets/images/main-gallery/24.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/24.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/25.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/25.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                             <a class="gallery-item" href="/assets/images/main-gallery/26.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/26.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/27.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/27.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/28.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/28.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            

                             <a class="gallery-item" href="/assets/images/main-gallery/29.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/29.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/30.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/30.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/31.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/31.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                             <a class="gallery-item" href="/assets/images/main-gallery/32.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/32.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/33.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/33.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/34.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/34.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/35.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/35.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                             <a class="gallery-item" href="/assets/images/main-gallery/36.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/36.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                             <a class="gallery-item" href="/assets/images/main-gallery/37.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/37.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                             <a class="gallery-item" href="/assets/images/main-gallery/38.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/38.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                             <a class="gallery-item" href="/assets/images/main-gallery/39.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/39.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/40.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/40.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/41.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/41.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/42.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/42.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                            <a class="gallery-item" href="/assets/images/main-gallery/43.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/43.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/44.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/44.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/45.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/45.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                            <a class="gallery-item" href="/assets/images/main-gallery/46.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/46.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            

                        <a class="gallery-item" href="/assets/images/main-gallery/47.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/47.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/48.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/48.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                            <a class="gallery-item" href="/assets/images/main-gallery/49.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/49.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/50.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/50.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            

                            <a class="gallery-item" href="/assets/images/main-gallery/51.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/51.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/52.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/52.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                            <a class="gallery-item" href="/assets/images/main-gallery/53.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/53.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/54.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/54.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                            <a class="gallery-item" href="/assets/images/main-gallery/55.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/55.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                            <a class="gallery-item" href="/assets/images/main-gallery/56.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/56.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/57.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/57.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/58.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/58.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/59.jpeg" title="POM - Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/59.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                            
                            
                            
                            
                            
                            
                            
                            








                            <!-- mix end -->









                            <!-- Add more gallery items as needed -->
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- END / GALLERY -->
@endsection
