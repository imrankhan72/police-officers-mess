@extends('layouts.site')
@section('content')
    <main>
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Banquets & Lawns</h2>
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
                            @for($x = 1; $x <= 4; $x++)
                                <img src="/assets/images/new-photos/party-hall/{{$x}}.jpg">
                                <img src="/assets/images/new-photos/rooftop/{{$x}}.jpg">
                            @endfor
                        </div>

                        <div class="text" style="margin-top: 0px">
                            <h2 class="heading">Banquets and lawns in Police Officers Mess</h2>
                            <div class="desc">
                                <p>The combination of banquet halls, beautiful landscaped gardens, and lawns overlooking the scenic Lower Lake in a Police Officers' Mess creates a versatile and picturesque setting for a wide range of events and special occasions. Here's how these elements come together </p>
                                <ol style="font-size: 16px">
                                    <li>
                                        <b>Banquet Halls: </b> The presence of banquet halls allows for indoor events, formal dinners, and celebrations to be held in a controlled environment. These halls are typically well-equipped with seating, lighting, and audiovisual equipment, making them suitable for a variety of gatherings, including award ceremonies, conferences, and receptions.
                                    </li>
                                    <li>
                                        <b>Beautiful Landscaped Gardens: </b> The landscaped gardens provide a natural and aesthetically pleasing backdrop for outdoor events. They are designed to enhance the overall ambiance, offering a serene and visually appealing environment for various activities.
                                    </li>
                                    <li>
                                        <b>Lawns Overlooking the Lower Lake: </b> The lawns with a view of the Lower Lake offer a picturesque and calming atmosphere. This space is perfect for open-air events like weddings, family picnics, community outreach programs, and even informal gatherings. The view of the lake adds a scenic touch to any event, making it all the more special.
                                    </li>
                                    <li>
                                        <b>Celebrating Special Occasions: </b> The combined availability of banquet halls and outdoor spaces allows for a wide range of special occasions to be celebrated within the mess. This might include retirement parties, promotions, weddings, anniversaries, and community engagement events.
                                    </li>
                                    <li>
                                        <b>Versatility: </b> The mess can accommodate a variety of events, from formal, elegant gatherings inside the banquet halls to relaxed and informal picnics or barbecues on the lawns. The versatility of the space allows for flexibility in event planning and execution.
                                    </li>
                                </ol>
                                <p>
                                    Having these amenities, including both indoor and outdoor spaces, provides a comprehensive solution for organizing and hosting a wide range of events and activities within the Mess. It offers a balance between formal and informal settings, giving officers and their families a place to celebrate, connect, and build positive relationships with the community.
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
