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
                <ul class="nav nav-tabs">
                    <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#ground">Hotel & Ground</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#gym">Gym</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#dining">Dining</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#party-hall">Party Hall</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#roof-top">Roof Top</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rooms">Rooms</a></li>
                </ul>
                <div class="tab-content" style="margin-top: 20px;">
                    <div id="ground" class="tab-pane fade show active in ">
                        <div class="popup-gallery" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                            <a class="gallery-item" href="/assets/images/room/img-1.jpg" title="Room 1" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/room/img-1.jpg" alt="Image 1" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/room/img-2.jpg" title="Room 2" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/room/img-2.jpg" alt="Image 1" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/room/img-3.jpg" title="Room 3" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/room/img-3.jpg" alt="Image 1" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/room/img-4.jpg" title="Room 4" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/room/img-4.jpg" alt="Image 1" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/room/img-5.jpg" title="Room 5" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/room/img-5.jpg" alt="Image 1" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/room/img-6.jpg" title="Room 6" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/room/img-6.jpg" alt="Image 1" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/room/img-7.jpg" title="Room 7" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/room/img-7.jpg" alt="Image 1" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/room/img-1.jpg" title="Room 8" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/room/img-1.jpg" alt="Image 1" style="width: 100%; height: auto;">
                            </a>
                            <a class="gallery-item" href="/assets/images/room/img-1.jpg" title="The Cleaner" style="margin-bottom: 20px; flex: 0 0 calc(33.33% - 20px);">
                                <img src="/assets/images/room/img-1.jpg" alt="Image 1" style="width: 100%; height: auto;">
                            </a>
                            <!-- Add more gallery items as needed -->
                        </div>
                    </div>
                    <div id="gym" class="tab-pane fade ">
                        Gym images
                    </div>
                    <div id="dining" class="tab-pane fade ">
                      Dining
                    </div>
                    <div id="party-hall" class="tab-pane fade">
                        Party hall
                    </div>
                    <div id="roof-top" class="tab-pane fade">
                        Roof top
                    </div>
                    <div id="rooms" class="tab-pane fade">
                        <!-- Content for Rooms tab goes here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / GALLERY -->
@endsection
