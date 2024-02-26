@extends('layouts.site')
@section('content')
    <main>
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Restaurants</h2>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->

        <!-- ABOUT -->
        <section class="section-about">
            <div class="container">

                <div class="about">

                    <!-- ITEM -->
                    <div class="about-item">


                        <div class="img owl-single">
                            
                           <img src="/assets/images/new-photos/dining/1.jpg" alt="">
                             <img src="/assets/images/new-photos/dining/2.jpg" alt="">
                            <img src="/assets/images/new-photos/dining/roof-top.jpg" alt="">
                            <img src="/assets/images/new-photos/dining/roof-top1.jpg" alt="">
                           
                             <img src="/assets/images/new-photos/dining/3.jpg" alt="">
                            
                             <img src="/assets/images/new-photos/dining/5.jpg" alt="">
                            
                             
                            
                            
                        </div>
                        
<!--                         <div class="img owl-single">
                            @for($x = 1; $x <= 6; $x++)
                                <img src="/assets/images/new-photos/dining/{{$x}}.jpg">
                            @endfor
                        </div> -->

                        <div class="text" style="margin-top: 0px">
                            <h2 class="heading">Restaurant in Police Officers Mess</h2>
                            <div class="desc">
                               <p> Our multi-cuisine restaurant offers a variety of quality and tasty delicacies and is a great addition to the facilities and services provided. </p>
                                <p>Here are some key features of the mess a restaurant:</p>
                                <ol style="font-size: 16px">
                                    <li><b>Culinary Diversity:</b> A multi-cuisine restaurant caters to a wide range of tastes and preferences, offering officers and other personnel a diverse selection of dishes from different cuisines. This variety ensures that there's something for everyone.</li>
                                    <li><b>Quality Food:</b> Emphasizing the quality of the dishes served is crucial to provide officers with delicious and satisfying meals. Using fresh ingredients and skilled chefs contribute to the restaurant's reputation.</li>
                                    <li><b>Convenience:</b> Having a restaurant on-site in the mess offers convenience to officers and staff who may not have the time to dine outside. It eliminates the need to travel for a good meal.</li>
                                    <li><b>Versatility:</b> The restaurant can serve as a venue for various occasions, from casual family dinners to more formal events like promotions and retirements.</li>
                                    <li><b>Socializing:</b> It provides a relaxed and comfortable setting for officers to socialize and build relationships with colleagues, fostering a sense of community.</li>
<!--                                     <li><b>Guest-Friendly:</b> Welcoming family members and guests to the restaurant allows officers to share meals with loved ones without leaving the mess.</li> -->
                                    <li><b>Menu Updates:</b> Periodic updates and changes to the menu keep the dining experience fresh and exciting for regular patrons.</li>
                                    <li><b>Specials and Themes:</b> The restaurant can feature special dishes and themed nights, providing officers with unique dining experiences.</li>
                                    <li><b>Hygiene and Safety:</b> Ensuring the restaurant complies with strict hygiene and safety standards is vital to maintain the well-being of all diners.</li>
<!--                                     <li><b>Affordable Pricing:</b> Pricing should be reasonable and accessible to officers and their families, promoting frequent visits to the restaurant.</li> -->
                                </ol>
                                <p>Our multi-cuisine restaurant of this nature not only serves as a place to enjoy a variety of delicious meals but also contributes to the overall quality of life and well-being of the officers and their families within the Police Officers' Mess. It becomes a hub for culinary enjoyment and a place for building positive relationships among the law enforcement community.
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- END / ITEM -->



                </div>

            </div>
        </section>

    </main>
@endsection
