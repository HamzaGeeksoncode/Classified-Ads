<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#000000">
    <meta name="description"
        content="Exotic and Unique Cars Boutique Based in Riyadh, UAE. Established in 2014 as a One-stop Shop for Car Collecting Enthusiasts">
    <link rel="apple-touch-icon" href="/logo192.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    {{-- <link rel="manifest" href="/manifest.json"> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Seven Car Lounge</title>



    <script defer="defer" src="{{ asset('home/assets/js/main.7a4af184.js') }}"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

    <link href="{{ asset('home/assets/css/main.css') }}" rel="stylesheet">

</head>

<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <div class="bg-black">
            <div class="header_bg">
                <div>
                    <div class="mobil_device row"><i class="fa-solid fa-bars"></i></div>
                    <div class="Nav_row row">
                        <div class="col-md-7">
                            <div class="logo_search">
                                <div class="logo"><a href="/"><img class="img-fluid"
                                            src="{{ asset('home/assets/images/logo.png') }}" alt="Site Logo"></a></div>


                                <div class="search_fild">
                                    <form class="d-flex">
                                        <input placeholder="Search here..." aria-label="Search"
                                            class="me-2 text-white form-control" value="">
                                        <div class="serch_icon"><i class="fas fa-search" aria-hidden="true"></i></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="menu_right">
                                <a activeclassname="active" aria-current="page" class="f-m fw-bolder text-white active"
                                    href="#">Home</a><a href="#"><button class="f-m fw-bolder text-dark"
                                        style="background: #dd5645;">Sell with us</button></a><a
                                    href="{{ route('login') }}"><button class="f-m fw-bolder">Login</button></a><a
                                    activeclassname="menu_active" class="f-m fw-bolder text-white"
                                    href="contact.html">Support</a>
                                <a href="#">
                                    <select class="f-m fw-bolder">
                                        <option>En</option>
                                        <option>Dn</option>
                                        <option>Bn</option>
                                    </select>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row"></div>
                </div>
            </div>





            <div class="bg-black shadow-ms border-bottom border-secondary   py-3 sticky-top">
                <div class="container">
                    <div class="me-0 row">
                        <div class="col-md-5">
                            <div
                                class="p-2 d-flex flex-nowrap border border-secondary border-rounded align-items-center">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    class="mx-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                                    style="color: #dd5645;">
                                    <path
                                        d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z">
                                    </path>
                                </svg>
                                <input class="w-100" type="search" placeholder="Search here..."
                                    style="border: none; outline: none; color: rgb(0, 0, 0); background: rgb(255, 255, 255); border-radius: 2.5rem; padding: 4px 12px;">
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div lang="en" class="sc-1ighvb1-0 fgWsuT sc-1ofz4w2-5 edxhXB">
                                <div id="notification-bell" class="sc-1ofz4w2-7 hYdgKV">
                                    <button data-testid="header-notification-icon" rel="nofollow"
                                        class="sc-1fl7xgp-0 fnBhIh">
                                        <div class="sc-1ofz4w2-1 oqDit"><img width="18" height="18"
                                                src="https://dbzproperty-a.akamaihd.net/frontend-web/static-resources/assets/nav-icons/my-notifications.svg"
                                                aria-label="Notifications" alt="Notifications" /></div>
                                        <span class="sc-1ofz4w2-6 AUdcf">Notifications</span>
                                    </button>
                                </div>
                                <div id="my-searches" class="sc-1ofz4w2-7 hYdgKV">
                                    <button data-testid="header-savesearch-icon" rel="nofollow"
                                        class="sc-1fl7xgp-0 fnBhIh">
                                        <div class="sc-1ofz4w2-1 oqDit"><img width="18" height="18"
                                                src="https://dbzproperty-a.akamaihd.net/frontend-web/static-resources/assets/nav-icons/my-searches.svg"
                                                aria-label="Saved Searches" alt="Saved Searches" /></div>
                                        <span class="sc-1ofz4w2-6 AUdcf">My Searches</span>
                                    </button>
                                </div>
                                <div id="my-favorites" class="sc-1ofz4w2-7 hYdgKV">
                                    <button data-testid="header-fav-icon" rel="nofollow" class="sc-1fl7xgp-0 fnBhIh">
                                        <div class="sc-1ofz4w2-1 oqDit"><img width="18" height="18"
                                                src="https://dbzproperty-a.akamaihd.net/frontend-web/static-resources/assets/nav-icons/my-favorites.svg"
                                                aria-label="Favorites" alt="Favorites" /></div>
                                        <span class="sc-1ofz4w2-6 AUdcf">Favorites</span>
                                    </button>
                                </div>
                                <div id="sendbird_chat" class="sc-1ofz4w2-7 hYdgKV">
                                    <button data-testid="header-chat-icon" rel="nofollow" class="sc-1fl7xgp-0 fnBhIh">
                                        <div class="sc-1ofz4w2-1 oqDit"><img width="18" height="18"
                                                src="https://dbzproperty-a.akamaihd.net/frontend-web/static-resources/assets/nav-icons/my-chats.svg"
                                                aria-label="Chats" alt="Chats" /></div>
                                        <span class="sc-1ofz4w2-6 AUdcf">Chats</span>
                                    </button>
                                </div>
                                <div id="my-ads" class="sc-1ofz4w2-7 hYdgKV">
                                    <button data-testid="header-ads-icon" rel="nofollow" class="sc-1fl7xgp-0 fnBhIh">
                                        <div class="sc-1ofz4w2-1 oqDit">
                                            <img width="18" height="18"
                                                src="https://dbzproperty-a.akamaihd.net/frontend-web/static-resources/assets/nav-icons/my-ads.svg"
                                                aria-label="My Ads" alt="My Ads" />
                                            <img alt="New"
                                                src="https://dbzproperty-a.akamaihd.net/frontend-web/static-resources/assets/nav-icons/new-badge.svg"
                                                class="sc-1ofz4w2-2 cEAEso" />
                                        </div>
                                        <span class="sc-1ofz4w2-6 AUdcf">My Ads</span>
                                    </button>
                                </div>
                                <!-- <a href="/user/auth?next=/en/?verify_flow=1" data-fnid="login_signup" class="sc-uo2hpw-0 eJTEjC sc-1g6t1fi-0 bFMIOA"><span>Log in or sign up</span></a> -->
                                <div lang="en" class="sc-1ighvb1-0 ghunuv"><button data-fnid="place-an-ad"
                                        data-testid="place-an-ad-button" class="sc-n1qdao-0 bcwAuy">Place Your
                                        Ad</button></div>
                            </div>

                        </div>
                        <div class="mt-3 d-flex col-12" style="overflow: auto;"><button
                                class="btn btn-outline-dark rounded fw-bold border border-secondary px-5 me-3"
                                style="background: #dd5645; color: rgb(255, 255, 255); white-space: nowrap;">Cars</button><button
                                class="btn rounded fw-bold border border-secondary px-5 me-3"
                                style="background: transparent; color: white;">Bikes</button><button
                                class="btn rounded fw-bold border border-secondary px-5 me-3"
                                style="background: transparent; color: white; white-space: nowrap;">Filters</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-black" style="min-height: 100vh;">
                <div class="py-4 container">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <h2 class="al-cars">{{ ucwords(request()->type) }}</h2>
                        </div>

                    </div>
                    <div class="row">



                        @foreach($users as $key => $d)
                        <div class="g-4 col-lg-3 col-md-6 col-12">
                            <div class="border border-secondary h-100 rounded overflow-hidden">
                                <div class="position-relative">
                                    <img src="{{ asset('public/adpost/features/image/' . $d->feature_image) }}"
                                        class="w-100 border-bottom border-secondary"
                                        style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                                    <div class="car-time-and-price d-flex"></div>
                                </div>
                                <div class="p-3">
                                    <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                        <div class="car-shareMark"><button type="button"
                                                class="text-light btn btn-link"><i
                                                    class="fa-solid fa-share-nodes"></i></button><button type="button"
                                                class="text-light btn btn-link"><i
                                                    class="fa-regular fa-bookmark"></i></button></div>
                                        <div class="px-1 text-uppercase rounded" style="background: #dd5645;">
                                            <span>AED {{ $d->price }}</span>
                                        </div>
                                    </div>
                                    <a class="car-title-link" href="cars.html">
                                        <h5 class="auction-card-title fw-bold text-uppercase pt-3"
                                            style="color: white;">{{ $d->title }}</h5>
                                    </a>
                                    <p class="text-muted">{{ $d->description }}</p>

                                    <div class="d-flex align-items-center lo lof">
                                        <div class="text-muted d-flex align-items-center"><img
                                                src="{{ asset('public/company/logo/' . $d->company_logo) }}" alt=""
                                                class="me-1" style="width: 100px; height: 40px;"></div>
                                    </div>
                                    <div class="d-flex align-items-center lo">
                                        <div class="text-muted d-flex align-items-center"><img
                                                src="https://flagcdn.com/ae.svg" alt="" class="me-1"
                                                style="width: 20px; height: 15px;"><span
                                                class="text-capitalize">UAE</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>




        </div>
    </div>




    <div class="footer_bg border-top border-secondary">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3">
                    <div class="footer_text">
                        <div class="footer_logo"><img class="img-fluid"
                                src="{{ asset('home/assets/images/logo.png ') }}" alt=""></div>
                        <p class="text-center f-s"><a class="email_info text-white" href="$">info@abc.com</a></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_text">
                        <div class="footer_heading">
                            <h2 class="f-m">AUCTIONS</h2>
                        </div>
                        <div class="footer_menu f-s">
                            <li><a class="text-white" href="#">Live Auctions</a></li>
                            <li><a class="text-white" href="#">Sold</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_text">
                        <div class="footer_heading">
                            <h2 class="f-m">SELLING</h2>
                        </div>
                        <div class="footer_menu f-s">
                            <li><a class="text-white" href="#">Sell With Us</a></li>
                            <li><a class="text-white" href="#">About Us</a></li>
                            <li><a class="text-white" href="#">Selling Guide</a></li>
                            <li><a class="text-white" href="#">FAQs</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_text">
                        <div class="footer_heading">
                            <h2 class="f-m">company</h2>
                        </div>
                        <div class="footer_menu f-s">
                            <li><a class="text-white" href="#">Blog</a></li>
                            <li><a class="text-white" href="#">Privacy and Policy</a></li>
                            <li><a class="text-white" href="#">Terms and Conditions</a></li>
                            <li><a class="text-white" href="#">Contact Us</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="f-s col-md-6">
                        <p>all rights reserved, 2021</p>
                    </div>
                    <div class="col-md-6">
                        <div class="social_icon"><a target="_blank" href="#"><i
                                    class="fa-brands text-white fa-facebook-f"></i></a><a target="_blank" href="#"><i
                                    class="fa-brands text-white fa-twitter"></i></a><a target="_blank" href="#"><i
                                    class="fa-brands text-white fa-instagram"></i></a><a target="_blank"
                                href="https://sa.linkedin.com/company/seven-car-lounge"><i
                                    class="fa-brands text-white fa-linkedin-in"></i></a><a target="_blank" href="#"><i
                                    class="fa-brands text-white fa-youtube"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container me modall animate">

            <!-- upper button section to select
                       the login or signup form -->
            <div class="sliders"></div>
            <div class="btn">

                <button class="close">&times;</button>
                <button class="login">Login</button>
                <button class="signup">Signup</button>
            </div>

            <!-- Form section that contains the
                       login and the signup form -->
            <div class="form-section">

                <!-- login form -->
                <div class="login-box">
                    <input type="email" class="email ele" placeholder="youremail@email.com">
                    <input type="password" class="password ele" placeholder="password">
                    <button class="clkbtn">Login</button>
                </div>

                <!-- signup form -->
                <div class="signup-box">
                    <input type="text" class="name ele" placeholder="Enter your name">
                    <input type="email" class="email ele" placeholder="youremail@email.com">
                    <input type="password" class="password ele" placeholder="password">
                    <input type="password" class="password ele" placeholder="Confirm password">
                    <button class="clkbtn">Signup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="Toastify"></div>
    </div>
    </div>
</body>

</html>
