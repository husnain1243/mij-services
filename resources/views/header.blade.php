<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="icon" href="images/SiteFavicon.png" type="image/x-icon">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ @url('css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    {{-- <link href="{{ @url('css/font-awesome.min.css') }}" rel="stylesheet" /> --}}
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{ @url('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ @url('css/responsive.css') }}" rel="stylesheet" />

    <link rel="icon" type="image/png" href="{{ @url('images/favicon.png') }}">


</head>

<body>
    <header class="header_section overflow-hidden">
        <div class="header_top">
            <div class="container header_top_container">
                <!-- <div class="lang_box dropdown">
    <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
      <img src="images/flag-uk.png" alt="flag" class=" " title="United Kingdom"> <i class="fa fa-angle-down " aria-hidden="true"></i>
    </a>
    <div class="dropdown-menu ">
      <a href="#" class="dropdown-item">
        <img src="images/flag-france.png" class="" alt="flag">
      </a>
    </div>
    <span>
      English
    </span>
  </div> -->
                <div class="contact_nav">
                    <a href="">
                        <i class="fas fa-globe" aria-hidden="true"></i>
                        <span style="font-weight: 500">
                            UAE’s Experts – Hire your expert today!
                        </span>
                    </a>
                    <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span style="font-weight: 500">
                            +971528586913
                        </span>
                    </a>

                </div>
                <div class="social_box">
                    <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>

                    <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="header_bottom position-relative">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <img style="height: auto; width: 200px;" src="images/Sitelogo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item {{ $home ?? '' }}">
                                <a class="nav-link" href="/" style="font-weight: 600">Home <span
                                        class="sr-only"></span></a>
                            </li>
                            <li class="nav-item {{ $servicess ?? '' }}">
                                <a class="nav-link" href="/services" style="font-weight: 600">Services</a>
                            </li>
                            <li class="nav-item {{ $about ?? '' }}">
                                <a class="nav-link" href="/about-us" style="font-weight: 600"> About</a>
                            </li>

                            <li class="nav-item {{ $tetimonials ?? '' }}">
                                <a class="nav-link" href="/tetimonials" style="font-weight: 600">Testimonial</a>
                            </li>
                            <li class="nav-item {{ $contact ?? '' }}">
                                <a class="nav-link" href="/contact-us" style="font-weight: 600">Contact Us</a>
                            </li>
                            {{-- <li class="nav-item {{ $</ }}">
                                <a class="nav-link" href="#"> Login</a>
                            </li> --}}
                            <!-- <form class="form-inline">
          <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form> -->
                        </ul>
                        <!-- <div class="quote_btn-container">
        <a href="" class="quote_btn">
          Get A Quote
        </a>
      </div> -->
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="calling-button-container d-flex flex-row w-100 justify-content-between">
        <div class="Phone-button-container" style="height: 60px; width: 60px; margin-left: 30px;">
            <a href="tel:971528586913" class="a">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="60px" height="60px">
                    <path fill="#0f0"
                        d="M13,42h22c3.866,0,7-3.134,7-7V13c0-3.866-3.134-7-7-7H13c-3.866,0-7,3.134-7,7v22	C6,38.866,9.134,42,13,42z" />
                    <path fill="#fff"
                        d="M35.45,31.041l-4.612-3.051c-0.563-0.341-1.267-0.347-1.836-0.017c0,0,0,0-1.978,1.153	c-0.265,0.154-0.52,0.183-0.726,0.145c-0.262-0.048-0.442-0.191-0.454-0.201c-1.087-0.797-2.357-1.852-3.711-3.205	c-1.353-1.353-2.408-2.623-3.205-3.711c-0.009-0.013-0.153-0.193-0.201-0.454c-0.037-0.206-0.009-0.46,0.145-0.726	c1.153-1.978,1.153-1.978,1.153-1.978c0.331-0.569,0.324-1.274-0.017-1.836l-3.051-4.612c-0.378-0.571-1.151-0.722-1.714-0.332	c0,0-1.445,0.989-1.922,1.325c-0.764,0.538-1.01,1.356-1.011,2.496c-0.002,1.604,1.38,6.629,7.201,12.45l0,0l0,0l0,0l0,0	c5.822,5.822,10.846,7.203,12.45,7.201c1.14-0.001,1.958-0.248,2.496-1.011c0.336-0.477,1.325-1.922,1.325-1.922	C36.172,32.192,36.022,31.419,35.45,31.041z" />
                </svg>
            </a>
        </div>
        <div class="whatsapp-button-container mb-3" style="height: 60px; width: 60px; margin-right: 30px;">
            <a href="https://wa.me/971528586913" class="a">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="60px" height="60px"
                    clip-rule="evenodd">
                    <path fill="#fff"
                        d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z" />
                    <path fill="#fff"
                        d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z" />
                    <path fill="#cfd8dc"
                        d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z" />
                    <path fill="#40c351"
                        d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z" />
                    <path fill="#fff" fill-rule="evenodd"
                        d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
