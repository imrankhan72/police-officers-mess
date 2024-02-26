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
                            

                            <!-- mix -->

                             <a class="gallery-item" href="/assets/images/main-gallery/7.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/7.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/5.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/5.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

 <a class="gallery-item" href="/assets/images/main-gallery/banquet-1.jpg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/banquet-1.jpg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/billiards.jpg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/billiards.jpg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/delux-room.jpg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/delux-room.jpg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/lawn-1.jpg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/lawn-1.jpg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/lawan-2.jpg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/lawan-2.jpg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/reception-lobby.jpg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/reception-lobby.jpg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/roop-top.jpg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/roof-top.jpg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/roop-top1.jpg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/roof-top1.jpg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/roop-top2.jpg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/roof-top2.jpg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/roop-top3.jpg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/roof-top3.jpg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            
                            <a class="gallery-item" href="/assets/images/main-gallery/6.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/6.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
  
                            
                            <a class="gallery-item" href="/assets/images/main-gallery/8.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/8.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/9.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/9.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/10.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/10.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/11.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/11.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/1.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/1.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/12.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/12.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/13.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/13.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/14.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/14.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/15.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/15.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                             <a class="gallery-item" href="/assets/images/main-gallery/16.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/16.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/17.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/17.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/18.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/18.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/19.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/19.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/20.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/20.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            

                             <a class="gallery-item" href="/assets/images/main-gallery/21.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/21.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>



                             <a class="gallery-item" href="/assets/images/main-gallery/24.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/24.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/25.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/25.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            

                             <a class="gallery-item" href="/assets/images/main-gallery/27.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/27.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/28.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/28.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            

                             <a class="gallery-item" href="/assets/images/main-gallery/29.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/29.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            
                            <a class="gallery-item" href="/assets/images/main-gallery/55.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/55.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                            
                         
                            <a class="gallery-item" href="/assets/images/main-gallery/58.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/58.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/59.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/59.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                             <a class="gallery-item" href="/assets/images/main-gallery/gym1.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/gym1.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>

                            <a class="gallery-item" href="/assets/images/main-gallery/gym2.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/gym2.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
                            </a>
                          

                            <a class="gallery-item" href="/assets/images/main-gallery/gym5.jpeg" title="Police Officers' Mess, Bhopal" style="margin-bottom: 20px; flex: 0 0 calc(25% - 20px);">
                                <img src="/assets/images/main-gallery/gym5.jpeg" alt="Police Officers' Mess, Bhopal" style="width: 100%; height: auto;">
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
