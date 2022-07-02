@extends('front.Layout.app')

@section('content')
    <div class="homepage_slider">
        <div class="slider-container">
            <div class="slider-control left inactive"></div>
            <div class="slider-control right"></div>
            <ul class="slider-pagi"></ul>
            <div class="slider">
                @foreach ($banners as $bannerKey => $bannerValue)
                <div class="slide slide-{{$bannerKey}} {{($bannerKey == 0) ? 'active' : ''}}">
                    <div class="slide__bg" style="background-image: url({{ asset($bannerValue->img_1000) }});"></div>
                    <div class="slide__content">
                        <div class="slide__text">
                            <h2 class="slide__text-heading">{{$bannerValue->heading}}</h2>
                            <p class="slide__text-desc">{{$bannerValue->desc}}</p>
                            <div class="slide__controls">
                                <a href="{{$bannerValue->primary_btn_link}}" class="btn">{{$bannerValue->primary_btn_text}}</a>
                                <a href="{{$bannerValue->secondary_btn_link}}" class="btn btn__choose_tour">{{$bannerValue->secondary_btn_text}}</a>
                                <a class="arrow next"></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="slide slide-0 active">
                    <div class="slide__bg" style="background-image: url({{ asset('uploads/slide/slide1.jpg') }});"></div>
                    <div class="slide__content">
                        <div class="slide__text">
                            <h2 class="slide__text-heading">Seychelles</h2>
                            <p class="slide__text-desc">
                                Etiam porta sem malesuada magna mollis
                            </p>
                            <div class="slide__controls">
                                <a href="single.html" class="btn">Want a personal tour</a>
                                <a href="tour-list.html" class="btn btn__choose_tour">Choose tour</a>
                                <a class="arrow next"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide slide-1">
                    <div class="slide__bg" style="background-image: url({{ asset('uploads/slide/slide2.jpg') }});"></div>
                    <div class="slide__content">
                        <div class="slide__text">
                            <h2 class="slide__text-heading">Kyoto, Japan</h2>
                            <p class="slide__text-desc">Etiam porta sem malesuada magna mollis</p>
                            <div class="slide__controls">
                                <a href="single.html" class="btn">Want a personal tour</a>
                                <a href="tour-list.html" class="btn btn__choose_tour">Choose tour</a>
                                <a class="arrow next"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide slide-2">
                    <div class="slide__bg" style="background-image: url({{ asset('uploads/slide/slide3.jpg') }});"></div>
                    <div class="slide__content">
                        <div class="slide__text">
                            <h2 class="slide__text-heading">New Zealand</h2>
                            <p class="slide__text-desc">Etiam porta sem malesuada magna mollis</p>
                            <div class="slide__controls">
                                <a href="single.html" class="btn">Want a personal tour</a>
                                <a href="tour-list.html" class="btn btn__choose_tour">Choose tour</a>
                                <a class="arrow next"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide slide-3">
                    <div class="slide__bg" style="background-image: url({{ asset('uploads/slide/slide4.jpg') }});"></div>
                    <div class="slide__content">
                        <div class="slide__text">
                            <h2 class="slide__text-heading">The Great Outdoors</h2>
                            <p class="slide__text-desc">Etiam porta sem malesuada magna mollis</p>
                            <div class="slide__controls">
                                <a href="single.html" class="btn">Want a personal tour</a>
                                <a href="tour-list.html" class="btn btn__choose_tour">Choose tour</a>
                                <a class="arrow next"></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        {{-- <div class="most_popular">
            <span>
                The most popular destination this year - Thailand
            </span>
        </div> --}}
        <div class="categories" id="header_categories">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="items">
                        <div class="scroll">
                            <a href="single.html" class="categories_item">
                                <div class="icon">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('front/img/nap1.jpg') }}" alt="" class="image-cover">
                                    </div>
                                </div>
                                <div class="_title"><span>Ski tours</span></div>
                            </a>
                            <a href="single.html" class="categories_item">
                                <div class="icon">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('front/img/nap2.jpg') }}" alt="" class="image-cover">
                                    </div>
                                </div>
                                <div class="_title"><span>Excursion tours</span></div>
                            </a>
                            <a href="single.html" class="categories_item">
                                <div class="icon">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('front/img/nap3.jpg') }}" alt="" class="image-cover">
                                    </div>
                                </div>
                                <div class="_title"><span>Shop tours</span></div>
                            </a>
                            <a href="single.html" class="categories_item">
                                <div class="icon">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('front/img/nap4.jpg') }}" alt="" class="image-cover">
                                    </div>
                                </div>
                                <div class="_title"><span>SPA tours</span></div>
                            </a>
                            <a href="single.html" class="categories_item">
                                <div class="icon">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('front/img/nap5.jpg') }}" alt="" class="image-cover">
                                    </div>
                                </div>
                                <div class="_title"><span>Wedding tours</span></div>
                            </a>
                            <a href="single.html" class="categories_item">
                                <div class="icon">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('front/img/nap6.jpg') }}" alt="" class="image-cover">
                                    </div>
                                </div>
                                <div class="_title"><span>Tours weekend</span></div>
                            </a>
                            <a href="single.html" class="categories_item">
                                <div class="icon">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('front/img/nap7.jpg') }}" alt="" class="image-cover">
                                    </div>
                                </div>
                                <div class="_title"><span>Tours to islands</span></div>
                            </a>
                            <a href="single.html" class="categories_item">
                                <div class="icon">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('front/img/nap8.jpg') }}" alt="" class="image-cover">
                                    </div>
                                </div>
                                <div class="_title"><span>Cruises</span></div>
                            </a>
                            <a href="single.html" class="categories_item">
                                <div class="icon">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('front/img/nap9.jpg') }}" alt="" class="image-cover">
                                    </div>
                                </div>
                                <div class="_title"><span>Premium</span></div>
                            </a>
                        </div>

                    </div>
                    <div class="other_items" id="header_other_items">
                        <div class="categories_item item">
                            <div class="icon">
                                <div class="arrow"></div>
                            </div>
                            <div class="_title">
                                See more 4 directions
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="most_popular__section mainpage-slider">
        <div class="wrap">
            <div class="wrap_float">
                <div class="top_part">
                    <div class="top_part_left">
                        <p class="section_subtitle">POPULARLY</p>
                        <h2 class="section_title">
                            Most popular <br> holiday destinations
                        </h2>
                    </div>
                    <div class="top_part_right">
                        <a href="tour-list.html" class="btn">
                            <span>View all tours</span>
                        </a>
                        <div class="controls" id="most_popular__arrows">
                            <div class="arrow prev"></div>
                            <div class="arrow next"></div>
                        </div>
                    </div>
                </div>
                <div class="most_popular__section__slider" id="most_popular__slider">
                    <a href="single.html" class="slider_item" style="background-image: url({{ asset('front/img/prevput1.jpg') }})">
                        <div class="slider_item__content">
                            <div class="rating">
                                <div class="stars">
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star"></div>
                                </div>
                                <div class="reviews_count">
                                    (2 Reviews)
                                </div>
                            </div>
                            <h3 class="title">
                                Autumn in Japan | $3,500 $3,880
                            </h3>
                            <p class="description">
                                6 excursions to the main cities of the country, admire the beautiful autumn gardens
                            </p>
                            <div class="days">
                                <span>7 days</span>
                            </div>
                        </div>
                    </a>

                    <a href="single.html" class="slider_item" style="background-image: url({{ asset('front/img/prevput2.jpg') }})">
                        <div class="slider_item__tags">
                            <div class="tag discount">20% off</div>
                        </div>
                        <div class="slider_item__content">
                            <h3 class="title">
                                A tour of the Islands | $3,500 $3,880
                            </h3>
                            <p class="description">
                                6 excursions to the main cities of the country, admire the beautiful autumn gardens
                            </p>
                            <div class="days">
                                <span>23 days</span>
                            </div>
                        </div>
                    </a>

                    <a href="single.html" class="slider_item" style="background-image: url({{ asset('front/img/prevput3.jpg') }})">
                        <div class="slider_item__tags">
                            <div class="tag discount">20% off</div>
                        </div>
                        <div class="slider_item__content">
                            <div class="rating">
                                <div class="stars">
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star"></div>
                                </div>
                                <div class="reviews_count">
                                    (2 Reviews)
                                </div>
                            </div>
                            <h3 class="title">
                                Seychelles | from $300
                            </h3>
                            <p class="description">
                                6 excursions to the main cities of the country, admire the beautiful autumn gardens
                            </p>
                            <div class="days">
                                <span>7 days</span>
                            </div>
                        </div>
                    </a>
                    <a href="single.html" class="slider_item" style="background-image: url({{ asset('front/img/prevput4.jpg') }})">
                        <div class="slider_item__tags">
                            <div class="tag discount">20% off</div>
                        </div>
                        <div class="slider_item__content">
                            <div class="rating">
                                <div class="stars">
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star"></div>
                                </div>
                                <div class="reviews_count">
                                    (2 Reviews)
                                </div>
                            </div>
                            <h3 class="title">
                                Autumn in Japan | $3,500 $3,880
                            </h3>
                            <p class="description">
                                6 excursions to the main cities of the country, admire the beautiful autumn gardens
                            </p>
                            <div class="days">
                                <span>7 days</span>
                            </div>
                        </div>
                    </a>
                    <a href="single.html" class="slider_item" style="background-image: url({{ asset('front/img/prevput5.jpg') }})">
                        <div class="slider_item__tags">
                            <div class="tag discount">20% off</div>
                            <div class="tag new">New</div>
                        </div>
                        <div class="slider_item__content">
                            <div class="rating">
                                <div class="stars">
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star"></div>
                                </div>
                                <div class="reviews_count">
                                    (2 Reviews)
                                </div>
                            </div>
                            <h3 class="title">
                                A tour of the Islands | $3,500 $3,880
                            </h3>
                            <p class="description">
                                6 excursions to the main cities of the country, admire the beautiful autumn gardens
                            </p>
                            <div class="days">
                                <span>7 days</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="benefits">
        <div class="wrap">
            <div class="wrap_float">
                <div class="item">
                    <div class="item_img">
                        <img src="{{ asset('front/img/home3.jpg') }}" alt="">
                    </div>
                    <div class="tc">
                        <h3 class="item_title">Any route</h3>
                        <p class="item_text">
                            We will help you to make any route for travel
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="item_img">
                        <img src="{{ asset('front/img/home1.jpg') }}" alt="">
                    </div>
                    <div class="tc">
                        <h3 class="item_title">Your dream</h3>
                        <p class="item_text">
                            Your dreams of an unforgettable journey can come true with us
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="item_img">
                        <img src="{{ asset('front/img/home2.jpg') }}" alt="">
                    </div>
                    <div class="tc">
                        <h3 class="item_title">Our guarantee</h3>
                        <p class="item_text">
                            We guarantee you an unforgettable journey and a lot of impressions
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search_tour">
        <div class="wrap">
            <div class="wrap_float">
                <div class="search_tour_form">
                    <h2 class="section_subtitle">
                        SEARCH TOUR
                    </h2>
                    <p class="section_title">
                        Ready to rest? We are ready to help with the search
                    </p>
                    <div class="fields__block">
                        <div class="fields">
                            <div class="field">
                                <div class="label">Keywords</div>
                                <div class="field_wrap keywords">
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="field">
                                <div class="label">Activity</div>
                                <div class="field_wrap select_field">
                                    <select name="tour-activity">
                                        <option value="">Any</option>
                                        <option value="city-tours">City Tours</option>
                                        <option value="cultural-thematic-tours">Cultural &amp; Thematic Tours</option>
                                        <option value="family-friendly-tours">Family Friendly Tours</option>
                                        <option value="holiday-seasonal-tours">Holiday &amp; Seasonal Tours</option>
                                        <option value="indulgence-luxury-tours">Indulgence &amp; Luxury Tours</option>
                                        <option value="outdoor-activites">Outdoor Activites</option>
                                        <option value="relaxation-tours">Relaxation Tours</option>
                                        <option value="wild-adventure-tours">Wild &amp; Adventure Tours</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <div class="label">Destination</div>
                                <div class="field_wrap select_field">
                                    <select name="tour-activity">
                                        <option value="">Any</option>
                                        <option value="city-tours">City Tours</option>
                                        <option value="cultural-thematic-tours">Cultural &amp; Thematic Tours</option>
                                        <option value="family-friendly-tours">Family Friendly Tours</option>
                                        <option value="holiday-seasonal-tours">Holiday &amp; Seasonal Tours</option>
                                        <option value="indulgence-luxury-tours">Indulgence &amp; Luxury Tours</option>
                                        <option value="outdoor-activites">Outdoor Activites</option>
                                        <option value="relaxation-tours">Relaxation Tours</option>
                                        <option value="wild-adventure-tours">Wild &amp; Adventure Tours</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <div class="label">Duration</div>
                                <div class="field_wrap select_field">
                                    <select name="tour-activity">
                                        <option value="">Any</option>
                                        <option value="city-tours">City Tours</option>
                                        <option value="cultural-thematic-tours">Cultural &amp; Thematic Tours</option>
                                        <option value="family-friendly-tours">Family Friendly Tours</option>
                                        <option value="holiday-seasonal-tours">Holiday &amp; Seasonal Tours</option>
                                        <option value="indulgence-luxury-tours">Indulgence &amp; Luxury Tours</option>
                                        <option value="outdoor-activites">Outdoor Activites</option>
                                        <option value="relaxation-tours">Relaxation Tours</option>
                                        <option value="wild-adventure-tours">Wild &amp; Adventure Tours</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <div class="label">Date</div>
                                <div class="field_wrap calendar_field">
                                    <input type="text" class="calendar js_calendar">
                                </div>
                            </div>
                        </div>
                        <button class="submit"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popular_destination__section mainpage-slider">
        <div class="wrap">
            <div class="wrap_float">
                <div class="top_part">
                    <div class="top_part_left">
                        <div class="section_subtitle">
                            TRUE NOW
                        </div>
                        <h2 class="section_title">
                            Popular Destinations
                        </h2>
                    </div>
                    <div class="top_part_right">
                        <a href="destinations.html" class="btn">
                            <span>View all destinations</span>
                        </a>
                        <div class="controls" id="popular_destination__arrows">
                            <div class="arrow prev"></div>
                            <div class="arrow next"></div>
                        </div>
                    </div>
                </div>
                <div class="section_content">
                    <div class="popular_destination__slider" id="popular_destination__slider">
                        <div class="slide_item">
                            <a href="single.html" class="slide_item_img">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content" style="background-image: url({{ asset('front/img/prevnap3.jpg') }})"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="single.html" class="slide_item_content">
                                <div class="flag">
                                    <img src="{{ asset('front/img/turkey.svg') }}" alt="">
                                </div>
                                <h3 class="slide_title">
                                    Turkey
                                </h3>
                                <p class="slide_text">
                                    Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                </p>
                            </a>
                            <div class="slide_footer">
                                <div class="hours">15 tours</div>
                                <div class="tours_link">
                                    <a href="tour-list.html">View all tours</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide_item">
                            <a href="single.html" class="slide_item_img">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content" style="background-image: url({{ asset('front/img/prevnap2.jpg') }})"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="single.html" class="slide_item_content">
                                <div class="flag">
                                    <img src="{{ asset('front/img/egypt-3') }}.svg" alt="">
                                </div>
                                <h3 class="slide_title">
                                    Egypt
                                </h3>
                                <p class="slide_text">
                                    Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                </p>
                            </a>
                            <div class="slide_footer">
                                <div class="hours">15 tours</div>
                                <div class="tours_link">
                                    <a href="tour-list.html">View all tours</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide_item">
                            <a href="single.html" class="slide_item_img">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content" style="background-image: url({{ asset('front/img/prevnap4.jpg') }})"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="single.html" class="slide_item_content">
                                <div class="flag">
                                    <img src="{{ asset('front/img/brazil-3') }}.svg" alt="">
                                </div>
                                <h3 class="slide_title">
                                    Brazil
                                </h3>
                                <p class="slide_text">
                                    Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                </p>
                            </a>
                            <div class="slide_footer">
                                <div class="hours">15 tours</div>
                                <div class="tours_link">
                                    <a href="tour-list.html">View all tours</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide_item">
                            <a href="single.html" class="slide_item_img">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content" style="background-image: url({{ asset('front/img/prevnap5.jpg') }})"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="single.html" class="slide_item_content">
                                <div class="flag">
                                    <img src="{{ asset('front/img/cyprus-3') }}.svg" alt="">
                                </div>
                                <h3 class="slide_title">
                                    Cyprus
                                </h3>
                                <p class="slide_text">
                                    Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                </p>
                            </a>
                            <div class="slide_footer">
                                <div class="hours">15 tours</div>
                                <div class="tours_link">
                                    <a href="tour-list.html">View all tours</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide_item">
                            <a href="single.html" class="slide_item_img">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content" style="background-image: url({{ asset('front/img/prevnap1.jpg') }})"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="single.html" class="slide_item_content">
                                <div class="flag">
                                    <img src="{{ asset('front/img/usa.svg') }}" alt="">
                                </div>
                                <h3 class="slide_title">
                                    America
                                </h3>
                                <p class="slide_text">
                                    Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                </p>
                            </a>
                            <div class="slide_footer">
                                <div class="hours">15 tours</div>
                                <div class="tours_link">
                                    <a href="tour-list.html">View all tours</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide_item">
                            <a href="single.html" class="slide_item_img">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content" style="background-image: url({{ asset('front/img/prevnap9.jpg') }})"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="single.html" class="slide_item_content">
                                <div class="flag">
                                    <img src="{{ asset('front/img/russia.svg') }}" alt="">
                                </div>
                                <h3 class="slide_title">
                                    Russia
                                </h3>
                                <p class="slide_text">
                                    Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                </p>
                            </a>
                            <div class="slide_footer">
                                <div class="hours">15 tours</div>
                                <div class="tours_link">
                                    <a href="tour-list.html">View all tours</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide_item">
                            <a href="single.html" class="slide_item_img">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content" style="background-image: url({{ asset('front/img/prevnap6.jpg') }})"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="single.html" class="slide_item_content">
                                <div class="flag">
                                    <img src="{{ asset('front/img/eng.svg') }}" alt="">
                                </div>
                                <h3 class="slide_title">
                                    England
                                </h3>
                                <p class="slide_text">
                                    Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                </p>
                            </a>
                            <div class="slide_footer">
                                <div class="hours">15 tours</div>
                                <div class="tours_link">
                                    <a href="tour-list.html">View all tours</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top_destination mainpage-slider">
        <div class="section_heading">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="section_subtitle">
                        TOP DESTINATIONS
                    </div>
                    <h2 class="section_title">
                        Lavella - Tour Operator
                    </h2>
                    <div class="description">
                        <div class="left">
                            <p class="text">
                                Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor
                            </p>
                        </div>
                        <div class="right">
                            <p class="text">
                                Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_content popular_destination__content">
            <div class="wrap">
                <div class="wrap_float">
                    <a href="tour-list.html" class="item">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content image" style="background-image: url({{ asset('front/img/world10.jpg') }})"></div>
                                <span>Greece</span>
                            </div>
                        </div>
                    </a>
                    <a href="tour-list.html" class="item">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content image" style="background-image: url({{ asset('front/img/world1.jpg') }})"></div>
                                <span>Crimea</span>
                            </div>
                        </div>
                    </a>
                    <a href="tour-list.html" class="item">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content image" style="background-image: url({{ asset('front/img/world2.jpg') }})"></div>
                                <span>Turkey</span>
                            </div>
                        </div>
                    </a>
                    <a href="tour-list.html" class="item">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content image" style="background-image: url({{ asset('front/img/world3.jpg') }})"></div>
                                <span>Ireland</span>
                            </div>
                        </div>
                    </a>
                    <a href="tour-list.html" class="item">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content image" style="background-image: url({{ asset('front/img/world4.jpg') }})"></div>
                                <span>Cyprus</span>
                            </div>
                        </div>
                    </a>
                    <a href="tour-list.html" class="item">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content image" style="background-image: url({{ asset('front/img/world5.jpg') }})"></div>
                                <span>Thailand</span>
                            </div>
                        </div>
                    </a>
                    <a href="tour-list.html" class="item">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content image" style="background-image: url({{ asset('front/img/world6.jpg') }})"></div>
                                <span>Brazil</span>
                            </div>
                        </div>
                    </a>
                    <a href="tour-list.html" class="item">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content image" style="background-image: url({{ asset('front/img/world7.jpg') }})"></div>
                                <span>Maldives</span>
                            </div>
                        </div>
                    </a>
                    <a href="tour-list.html" class="item">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content image" style="background-image: url({{ asset('front/img/world8.jpg') }})"></div>
                                <span>Egypt</span>
                            </div>
                        </div>
                    </a>
                    <a href="tour-list.html" class="item">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content image" style="background-image: url({{ asset('front/img/world9.jpg') }})"></div>
                                <span>Tunisia</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="discount_section" style="background-image: url({{ asset('front/img/home5.jpg') }})">
        <div class="wrap">
            <div class="wrap_float">
                <div class="section_content">
                    <div class="tag">SALE</div>
                    <h2 class="section_title">Discount <span class="discount_tag">20% off</span> </h2>
                    <p class="text">
                        Curabitur blandit tempus porttitor. Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                    </p>
                    <div class="buttons">
                        <a href="tour-list.html" class="btn">See promotion tours</a>
                        <a href="tour-list.html" class="btn btn__choose_tour">Choose tour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog blog-section last-section" style="background-image: url({{ asset('front/img/home4.jpg') }});">
        <div class="wrap">
            <div class="wrap_float">
                <div class="top_part">
                    <div class="section_subtitle">
                        BLOG
                    </div>
                    <h2 class="section_title">
                        Travel articles
                    </h2>
                    <div class="section_description">
                        Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor
                    </div>
                </div>
                <div class="section_content">
                    <a href="blog-single.html" class="blog_item">
                        <div class="blog_item_img">
                            <img src="{{ asset('front/img/prevblog1.jpg') }}" alt="">
                        </div>
                        <div class="blog_item_date">
                            JUNE 6/2019 | UNCATEGORIZED
                        </div>
                        <h3 class="blog_item_title">
                            Pack wisely before traveling
                        </h3>
                        <p class="blog_item_text">
                            A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                        </p>
                    </a>
                    <a href="blog-single.html" class="blog_item">
                        <div class="blog_item_img">
                            <img src="{{ asset('front/img/prevblog2.jpg') }}" alt="">
                        </div>
                        <div class="blog_item_date">
                            JUNE 6/2019 | UNCATEGORIZED
                        </div>
                        <h3 class="blog_item_title">
                            Pack wisely before traveling
                        </h3>
                        <p class="blog_item_text">
                            A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                        </p>
                    </a>
                </div>
                <div class="show-more">
                    <a href="blog-list.html" class="btn">
                        <span>View all articles</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
