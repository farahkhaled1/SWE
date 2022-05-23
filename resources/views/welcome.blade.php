<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords"
        content="​Welcome to MIU&amp;apos;s&nbsp;Quality Assurance System, ​Welcome to MIU&amp;apos;s&nbsp;Quality Assurance System, ​Welcome to MIU&amp;apos;s&nbsp;Quality Assurance System">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/nicepage.css')}}">
    <link rel="stylesheet" href="{{url('css/Home.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{url('js/jquey.js.css')}}"></script>
    <script class="u-script" type="text/javascript" src="{{url('js/nicepage.js.css')}}"></script>
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i">




    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "../../public/images/logo-miu.png.pagespeed.ce.rwh7DNPyFw.png",
            "sameAs": []
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-overlap u-xl-mode">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <header class=" u-header u-section-row-container" id="sec-f4f6" data-animation-name=""
            data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
            <div class="u-section-rows">
                <div class="u-gradient u-section-row u-section-row-1" data-animation-name="" data-animation-duration="0"
                    data-animation-delay="0" data-animation-direction="" id="sec-5f8d">
                    <div class="u-clearfix u-sheet u-sheet-1">
                        <a href="" class="u-image u-logo u-image-1" data-image-width="654" data-image-height="194">
                            <img src="{{url('images/logo.png')}}" class="u-logo-image u-logo-image-1">
                        </a>
                        <a href="{{ route('login') }}"
                            class="u-border-none u-btn u-button-style u-custom-color-1 u-custom-font u-font-pt-sans u-hover-custom-color-1 u-btn-1">Login</a>
                        <div class="u-social-icons u-spacing-10 u-social-icons-1">
                            <a class="u-social-url" target="_blank" data-type="YouTube" title="YouTube" href=""><span
                                    class="u-icon u-social-icon u-social-youtube u-icon-1"><svg class="u-svg-link"
                                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-34f5"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-34f5">
                                        <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                                        <path fill="#FFFFFF"
                                            d="M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z">
                                        </path>
                                    </svg></span>
                            </a>
                        </div><span class="u-file-icon u-icon u-text-grey-90 u-icon-2"><img
                                src="{{url('images/1.png')}}" alt=""></span>
                    </div>





                </div>
                <div class="u-palette-1-dark-3 u-section-row u-sticky u-sticky-81a6 u-section-row-2" id="sec-1fdf">
                    <div class="u-clearfix u-sheet u-sheet-2">
                        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XS">
                            <div class="menu-collapse" style="font-size: 1.5rem;">
                                <a class="u-button-style u-nav-link" href="#">
                                    <svg class="u-svg-link" viewBox="0 0 24 24">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c615"></use>
                                    </svg>
                                    <svg class="u-svg-content" version="1.1" id="svg-c615" viewBox="0 0 16 16" x="0px"
                                        y="0px" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <rect y="1" width="16" height="2"></rect>
                                            <rect y="7" width="16" height="2"></rect>
                                            <rect y="13" width="16" height="2"></rect>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="u-custom-menu u-nav-container">
                                <ul class="u-nav u-unstyled u-nav-1">
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="home.blade.php"
                                            style="padding: 10px 22px;">Home</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                            style="padding: 10px 22px;" href="courses.html">Courses</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="u-custom-menu u-nav-container-collapse">
                                <div
                                    class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                                    <div class="u-inner-container-layout u-sidenav-overflow">
                                        <div class="u-menu-close"></div>
                                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html"
                                                    style="padding: 10px 22px;">Home</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                    style="padding: 10px 22px;">Courses</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                            </div>
                        </nav>
                        <form action="#" method="get"
                            class="u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-1">
                            <button class="u-search-button" type="submit">
                                <span class="u-search-icon u-spacing-10">
                                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                        viewBox="0 0 56.966 56.966">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-df65"></use>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="svg-df65" x="0px" y="0px" viewBox="0 0 56.966 56.966"
                                        style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                        class="u-svg-content">
                                        <path
                                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                                        </path>
                                    </svg>
                                </span>
                            </button>
                            <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
                        </form>
                    </div>





                </div>
                </nav>
            </div>





    </div>
    </div>
    </header>
    <section class="u-carousel u-slide u-block-0c50-1" id="carousel_fba9" data-interval="5000" data-u-ride="carousel">
        <ol class="u-absolute-hcenter u-carousel-indicators u-block-0c50-2">
            <li data-u-target="#carousel_fba9" data-u-slide-to="0" class="u-active"></li>
            <li data-u-target="#carousel_fba9" data-u-slide-to="1"></li>
            <li data-u-target="#carousel_fba9" data-u-slide-to="2"></li>
        </ol>
        <div class="u-carousel-inner" role="listbox">
            <div class="skrollable u-active u-align-center u-carousel-item u-clearfix u-image u-parallax u-shading u-section-1-1"
                src="" data-image-width="1696" data-image-height="1130">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <h1 class="u-text u-title u-text-1" data-animation-name="customAnimationIn"
                        data-animation-duration="1000" data-animation-direction=""> Welcome to MIU's<br>&nbsp;Quality
                        Assurance System
                    </h1>
                    <!-- <p class="u-large-text u-text u-text-variant u-text-2">I​n order to login please click on 'Sign In' then use your full MIU email</p> -->
                    <!-- <a href="" class="u-border-none u-btn u-button-style u-custom-color-1 u-hover-custom-color-1 u-btn-1">sign in here<span style="font-size: 1rem;">
                <span style="font-size: 1.875rem;"></span> -->
                    </span>
                    </a>
                </div>
            </div>
            <div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-2" src=""
                data-image-width="1439" data-image-height="960">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <h1 class="u-text u-title u-text-1"> Welcome to MIU's<br>&nbsp;Quality Assurance System
                    </h1>
                    <p class="u-large-text u-text u-text-variant u-text-2">I​n order to login please click on 'Sign In'
                        then use your full MIU email</p>
                    <a href=""
                        class="u-border-none u-btn u-button-style u-custom-color-1 u-hover-custom-color-1 u-btn-1">Log
                        in here<span style="font-size: 1rem;">
                            <span style="font-size: 1.875rem;"></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-0c50-3"
            href="#carousel_fba9" role="button" data-u-slide="prev">
            <span aria-hidden="true">
                <svg viewBox="0 0 477.175 477.175">
                    <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="u-absolute-vcenter-xl u-carousel-control u-carousel-control-next u-text-grey-30 u-block-0c50-4"
            href="#carousel_fba9" role="button" data-u-slide="next">
            <span aria-hidden="true">
                <svg viewBox="0 0 477.175 477.175">
                    <path
                        d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z">
                    </path>
                </svg>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </section>
    <section class="u-clearfix u-section-2" id="sec-e0f3">
        <div class="u-absolute-hcenter u-custom-color-3 u-expanded u-shape u-shape-rectangle"></div>
        <h3 class="u-align-center u-text u-text-1"> MIU quality assurance website is a modern and professional quality
            assurance management system which provides many awesome features &amp; options for a better user navigation.
        </h3>
    </section>
    <section class="u-clearfix u-section-3" id="sec-41f7">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-row" style="">
                        <div class="u-container-style u-layout-cell u-left-cell u-size-31 u-size-xs-60 u-white u-layout-cell-1"
                            src="">
                            <div class="u-container-layout u-container-layout-1">
                                <h2 class="u-align-center u-text u-text-1"><u> Discover Misr International
                                        University</u>
                                </h2>
                                <div class="u-align-left u-left-0 u-video u-video-1">
                                    <div class="embed-responsive embed-responsive-1">
                                        <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;"
                                            class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/g1_oDKm-hrM?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0"
                                            frameborder="0" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-right-cell u-shape-rectangle u-size-29 u-size-xs-60 u-layout-cell-2"
                            src="">
                            <div class="u-border-2 u-border-grey-75 u-border-no-bottom u-border-no-right u-border-no-top u-container-layout u-container-layout-2"
                                src="">
                                <h3 class="u-align-center u-text u-text-default u-text-2">Features MIU System&nbsp;</h3>
                                <h5 class="u-align-left u-text u-text-default u-text-3"><b>SIS Staff System</b>
                                </h5>
                                <h6 class="u-align-left u-text u-text-4"> Doctor's and TA's can access the system to
                                    open their lectures online meetings according to their semester schedules and take
                                    the attendance for the students. In addition, they can manage their vacations
                                    online.&nbsp;</h6>
                                <h5 class="u-align-left u-text u-text-5"><b>Student Portal</b>
                                </h5>
                                <h6 class="u-align-left u-text u-text-6"> Many facilities students will found such as
                                    their semester schedules containing their lectures meeting links, their transcripts
                                    grading reports, online payment and more... Click&nbsp;<b>
                                        <a href="https://portal.miuegypt.edu.eg/Login.html" target="_blank"
                                            rel="noreferrer noopener"
                                            class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">here</a></b>&nbsp;to
                                    open Student Portal system.&nbsp;
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style class="u-overlap-style">
        .u-overlap:not(.u-sticky-scroll) .u-header {
            background-color: #292e33 !important
        }
    </style>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9d69">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-align-left u-large-text u-text u-text-variant u-text-1">Copyright © MIU 2021. All rights
                reserved.<br>
            </p>
            <h5 class="u-align-left u-text u-text-2"></h5>
        </div>
    </footer>

</body>

</html>