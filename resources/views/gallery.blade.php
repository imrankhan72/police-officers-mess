@extends('layouts.site')
<!-- Header | START -->
@section('content')
    <!-- GALLERY -->
    <section class="section-gallery bg-white tp_inner_padding">

        <div class="gallery">
            <h2 class="heading text-center">GALLERY</h2>

            <!-- FILTER -->
            <div class="gallery-cat text-center">
                <ul class="list-inline">
                    <li class="active"><a href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".ground">HOTEL &amp; GROUND</a></li>
                    <li><a href="#" data-filter=".gym">GYM</a></li>
                    <li><a href="#" data-filter=".dining">DINING</a></li>
                    <li><a href="#" data-filter=".party-hall">Party Hall</a></li>
                    <li><a href="#" data-filter=".roof-top">ROOF TOP</a></li>
                    <li><a href="#" data-filter=".rooms">ROOMS</a></li>
                </ul>
            </div>
            <!-- END / FILTER -->

            <!-- GALLERY CONTENT -->
            <div class="gallery-content hover-img">
                <div class="row">
                    <div class="gallery-isotope col-6 pd-0">

                        <!-- ITEM SIZE -->
                        <div class="item-size"></div>
                        <!-- END / ITEM SIZE -->
                        <!-- ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  suite">
                            <div class="gallery_item">
                                <a href="/assets/images/room/img-1.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                    <img src="/assets/images/room/img-1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  suite">
                            <div class="gallery_item">
                                <a href="/assets/images/room/img-2.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                    <img src="/assets/images/room/img-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <div class="item-isotope  ">
                            <div class="gallery_item">
                                <a href="/assets/images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                    <img src="/assets/images/gallery/img-1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ground ">
                            <div class="gallery_item">
                                <a href="/assets/images/gallery/popup/img-2.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                    <img src="/assets/images/gallery/img-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ground ">
                            <div class="gallery_item">
                                <a href="/assets/images/gallery/popup/img-3.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                    <img src="/assets/images/gallery/img-3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ">
                            <div class="gallery_item">
                                <a href="/assets/images/gallery/popup/img-4.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                    <img src="/assets/images/gallery/img-4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ground ">
                            <div class="gallery_item">
                                <a href="/assets/images/gallery/popup/img-5.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                    <img src="/assets/images/gallery/img-5.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ground ">
                            <div class="gallery_item">
                                <a href="/assets/images/gallery/popup/img-6.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                    <img src="/assets/images/gallery/img-6.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ground">
                            <div class="gallery_item">
                                <a href="/assets/images/gallery/popup/img-7.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                    <img src="/assets/images/gallery/img-7.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ">
                            <div class="gallery_item">
                                <a href="/assets/images/gallery/popup/img-8.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                    <img src="/assets/images/gallery/img-8.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ">
                            <div class="gallery_item">
                                <a href="/assets/images/gallery/popup/img-9.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                    <img src="/assets/images/gallery/img-9.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ground">
                            <div class="gallery_item">
                                <a href="/assets/images/gallery/popup/img-10.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                    <img src="/assets/images/gallery/img-10.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->



                        <!-- ITEM -->
                        <div class="item-isotope bathroom">
                            <div class="gallery_item">
                                <a href="/assets/images/gallery/popup/img-12.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                    <img src="/assets/images/gallery/img-12.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        {{--                        Ground & outside --}}
                        @for($x = 1; $x <= 6; $x++)
                            <div class="item-isotope ground">
                                <div class="gallery_item">
                                    <a href="/assets/images/new-photos/building-front/{{$x}}.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                        <img src="/assets/images/new-photos/building-front/{{$x}}.jpg">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                        @endfor

                        {{-- Gym--}}
                        @for($x = 1; $x <= 4; $x++)
                            <div class="item-isotope gym">
                                <div class="gallery_item">
                                    <a href="/assets/images/new-photos/gym/{{$x}}.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                        <img src="/assets/images/new-photos/gym/{{$x}}.jpg">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                        @endfor

                        {{--    Dining--}}
                        @for($x = 1; $x <= 6; $x++)
                            <div class="item-isotope dining">
                                <div class="gallery_item">
                                    <a href="/assets/images/new-photos/dining/{{$x}}.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                        <img src="/assets/images/new-photos/dining/{{$x}}.jpg">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                        @endfor

                        {{--Party Hall--}}
                        @for($x = 1; $x <= 10; $x++)
                            <div class="item-isotope party-hall">
                                <div class="gallery_item">
                                    <a href="/assets/images/new-photos/party-hall/{{$x}}.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                        <img src="/assets/images/new-photos/party-hall/{{$x}}.jpg">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                        @endfor

                        {{--    Rooftop--}}
                        @for($x = 1; $x <= 6; $x++)
                            <div class="item-isotope roof-top">
                                <div class="gallery_item">
                                    <a href="/assets/images/new-photos/rooftop/{{$x}}.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                        <img src="/assets/images/new-photos/rooftop/{{$x}}.jpg">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                        @endfor


                        {{-- Rooms--}}
                        @for($x = 1; $x <= 12; $x++)
                            <div class="item-isotope rooms">
                                <div class="gallery_item">
                                    <a href="/assets/images/new-photos/rooms/{{$x}}.jpg" class="gallery-popup mfp-image" title="Police Officer's Mess, Bhopal">
                                        <img src="/assets/images/new-photos/rooms/{{$x}}.jpg">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                        @endfor
                    </div>
                </div>

                {{--                <div class="our-gallery text-center">--}}
                {{--                    <a href="#" class="awe-btn awe-btn-default">BROWSE OUR GALLERY</a>--}}
                {{--                </div>--}}

            </div>
            <!-- GALLERY CONTENT -->

        </div>
    </section>
    <!-- END / GALLERY -->
@endsection
