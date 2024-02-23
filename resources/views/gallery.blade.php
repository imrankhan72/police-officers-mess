@extends('layouts.site')
<!-- Header | START -->
@section('content')



        </div>
    </div>
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
                            

                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-11.jpeg" title="hotel-lawn 1" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-11.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-2.jpeg" title="hotel-lawn 2" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-2.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-3.jpeg" title="hotel-lawn 3" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-3.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-4.jpeg" title="hotel-lawn 4" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-4.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-5.jpeg" title="hotel-lawn 5" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-5.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-6.jpeg" title="hotel-lawn 6" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-6.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-7.jpeg" title="hotel-lawn 7" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-7.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-8.jpeg" title="hotel-lawn 8" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-8.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-9.jpeg" title="The Cleaner" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-9.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-10.jpeg" title="The Cleaner" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-10.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-1.jpeg" title="The Cleaner" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-1.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-12.jpeg" title="The Cleaner" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-12.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-13.jpeg" title="The Cleaner" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-13.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/hotel-lawn/hotel-14.jpeg" title="The Cleaner" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/hotel-lawn/hotel-14.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                           

                            <!-- rooms start -->

                             <a class="gallery-item" href="/assets/images/accomodations/room-1.jpeg" title="The Cleaner" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/accomodations/room-1.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/accomodations/room-2.jpeg" title="The Cleaner" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/accomodations/room-2.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/accomodations/room-3.jpeg" title="The Cleaner" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/accomodations/room-3.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/accomodations/room-4.jpeg" title="The Cleaner" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/accomodations/room-4.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/accomodations/room-5.jpeg" title="The Cleaner" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/accomodations/room-5.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/accomodations/room-6.jpeg" title="The Cleaner" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/accomodations/room-6.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>



                            <!-- rooms end -->






                            <!-- Add more gallery items as needed -->
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- END / GALLERY -->
@endsection
