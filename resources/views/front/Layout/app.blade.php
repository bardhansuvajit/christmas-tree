<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lavella - Tour & Travel Agency Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/styles.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/img/favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/img/favicons/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/img/favicons/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('front/img/favicons/favicon-32x32.png" sizes="32x32') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/img/favicons/favicon.ico') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="#000" name="msapplication-TileColor">
    <meta content="#000" name="theme-color">

    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="header__top">
                        <div class="tel">
                            <a class="nav-call" href="tel:{{$site->customer_contact}}">{{$site->customer_contact}}</a>
                        </div>
                        <div class="email">
                            <a href="mailto:{{$site->customer_email}}">{{$site->customer_email}}</a>
                        </div>
                        <div class="socials">
                            <a href="{{$site->fb_link}}" class="a facebook"></a>
                            <a href="{{$site->ig_link}}" class="a instagram"></a>
                            <a href="{{$site->pt_link}}" class="a pinterest"></a>
                            <a href="{{$site->tw_link}}" class="a twitter"></a>
                        </div>
                    </div>
                    <div class="header__bottom">
                        <a href="{{URL::to('/')}}" class="logo">lavella</a>
                        <div class="menu" id="js-menu">
                            <div class="close"></div>
                            <div class="scroll">
                                <a class="current">Home</a>
                                <div class="scroll_wrap">
                                    <ul>
                                        <li><a href="/" class="active">Home</a></li>
                                        <li class="dropdown_li">
                                            <a href="#">
                                                <span>Pages</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li class="dropdown_li">
                                                        <a href="#">
                                                            <span>Search</span>
                                                        </a>
                                                        <div class="submenu">
                                                            <ul>
                                                                <li><a href="search-results.html">Search results</a></li>
                                                                <li><a href="search-results-not-found.html">No results</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="contacts.html">Contact</a></li>
                                                    <li><a href="gallery.html">Gallery</a></li>
                                                    <li><a href="coming-soon.html">Coming soon</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dropdown_li">
                                            <a href="tour-list.html">
                                                <span>Tour List</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="tour-list.html">Tour List</a></li>
                                                    <li><a href="tour-list-2.html">Tour List 2</a></li>
                                                    <li><a href="tour-list-3.html">Tour List 3</a></li>
                                                    <li><a href="tour-list-4.html">Tour List 4</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="destinations.html">Destinations</a></li>
                                        <li class="dropdown_li">
                                            <a href="single.html">
                                                <span>Tour Page</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="single.html">Tour Page</a></li>
                                                    <li><a href="single-dark.html">Tour Page Dark</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dropdown_li">
                                            <a href="blog-list.html">
                                                <span>Blog</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="blog-list.html">Blog</a></li>
                                                    <li><a href="blog-list-2.html">Blog 2</a></li>
                                                    <li><a href="blog-single.html">Blog Single</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom">
                                    <div class="tel">
                                        <a href="tel:+11235678910">+1 1235 6789 10</a>
                                    </div>
                                    <div class="email">
                                        <a href="mailto:info@hellodigi.ru">info@hellodigi.ru</a>
                                    </div>
                                    <div class="socials">
                                        <div class="links">
                                            <a href="#" class="fb"></a>
                                            <a href="#" class="instagram"></a>
                                            <a href="#" class="pinterest"></a>
                                            <a href="#" class="twitter"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search_link" id="search_link"></div>
                        <div class="mobile_btn" id="mobile_btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <div class="footer">
            <div class="footer_top">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="footer_head_mobile">
                            <div class="logo">lavella</div>
                            <div class="text">
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </div>
                        </div>
                        <div class="footer_top_menu">
                            <ul>
                                <li><a href="/" class="active">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="tour-list.html">Tour List</a></li>
                                <li><a href="destinations.html">Destinations</a></li>
                                <li><a href="single.html">Date & Pricing</a></li>
                                <li><a href="blog-list.html">Blog</a></li>
                            </ul>
                        </div>
                        <div class="socials">
                            <a href="#" class="a facebook"></a>
                            <a href="#" class="a instagram"></a>
                            <a href="#" class="a pinterest"></a>
                            <a href="#" class="a twitter"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_center">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="footer_center_left">
                            <a href="/" class="logo">lavella</a>
                            <div class="text">
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </div>
                        </div>
                        <div class="footer_center_menu">
                            <ul>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Family Friendly Tours</a></li>
                                <li><a href="#">Outdoor Activites</a></li>
                                <li><a href="#">Relaxation Tours</a></li>
                                <li><a href="#">City Tours</a></li>
                                <li><a href="#">Holiday & Seasonal Tours</a></li>
                                <li><a href="#">Cultural & Thematic Tours</a></li>
                                <li><a href="#">Wild & Adventure Tours</a></li>
                            </ul>
                        </div>
                        <div class="footer_center_right">
                            <div class="_title">CONTACTS</div>
                            <div class="text">
                                <p>Address: <b>{{$site->ofc_address}}</b> </p>
                                <p>Phone: <a href="tel:{{$site->customer_contact}}">{{$site->customer_contact}}</a></p>
                                <p><a href="mailto:{{$site->customer_email}}">{{$site->customer_email}}</a></p>
                            </div>
                        </div>
                        <div class="mobile_socials">
                            <a href="{{$site->fb_link}}" class="a facebook"></a>
                            <a href="{{$site->ig_link}}" class="a instagram"></a>
                            <a href="{{$site->pt_link}}" class="a pinterest"></a>
                            <a href="{{$site->tw_link}}" class="a twitter"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                Copyright 2020 <a href="#">hellodigi.ru</a> | All Right Reserved
            </div>
        </div>
    </div>

    <div class="search_form" id="search_form">
        <div class="wrap">
            <div class="wrap_float">
                <input type="text" class="input" placeholder="Search...">
                <button type="submit" class="submit"></button>
                <div class="close"></div>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>

    <div style="display: none;">
        <div class="modal modal_book_now" id="book-now">
            <div class="modal_wrap">
                <div class="modal-head">
                    <img src="{{ asset('front/img/vput2.jpg') }}" class="image-cover" alt="">
                </div>
                <div class="modal-body">
                    <div class="tags">
                        <div class="tag discount">20% off</div>
                        <div class="tag new">New</div>
                    </div>
                    <div class="modal-title">
                        America, San Francisco | $3,500
                    </div>
                    <div class="fields">
                        <div class="field half">
                            <label class="label" for="name-2">Full Name*</label>
                            <div class="input_wrap">
                                <input type="text" class="input" id="name-2">
                            </div>
                        </div>
                        <div class="field half">
                            <label class="label" for="email-2">Email Address*</label>
                            <div class="input_wrap">
                                <input type="email" class="input" id="email-2">
                            </div>
                        </div>
                        <div class="field half">
                            <label class="label" for="date-2a">Travel Date*</label>
                            <div class="input_wrap calendar-field">
                                <input type="text" class="input js_calendar" id="date-2a">
                            </div>
                        </div>
                        <div class="field half">
                            <p class="label">Person*</p>
                            <div class="input_wrap">
                                <input type="text" class="input" id="date-2">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="enquiry-2">Your Enquiry*</label>
                            <div class="textarea_wrap">
                                <textarea class="textarea" id="enquiry-2"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn submit">Sumbit</button>
                </div>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>

    <script defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_HERE&callback=initMap"></script>
    <script defer src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script defer src="{{ asset('front/js/jquery-ui.min.js') }}"></script>
    <script defer src="{{ asset('front/js/slick.min.js') }}"></script>
    <script defer src="{{ asset('front/js/jquery.arcticmodal.min.js') }}"></script>
    <script defer src="{{ asset('front/js/lightgallery.js') }}"></script>
    <script defer src="{{ asset('front/js/spincrement.min.js') }}"></script>
    <script defer src="{{ asset('front/js/scripts.min.js') }}"></script>
</body>

</html>
