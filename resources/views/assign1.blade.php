<!DOCTYPE html>
<html style="font-size: 16px">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords" content="Basic information" />
    <meta name="description" content="" />
    <meta name="page_type" content="np-template-header-footer-from-plugin" />
    <title>assign1</title>
    <link
    
      rel="stylesheet"
      href="{{url('css/nicepage2.css')}}"
      media="screen"
    />
    <link
      rel="stylesheet"
      href= "{{url('css/assign1.css')}}"
      media="screen"
    />
    <script
      class="u-script"
      type="text/javascript"
      src="{{url('/js/jquery1.js')}}"
      defer=""
    ></script>
    <script
      class="u-script"
      type="text/javascript"
      src="{{url('/js/nicepage.js')}}"
      defer=""
    ></script>
    <meta name="generator" content="Nicepage 4.6.5, nicepage.com" />
    <link
      id="u-theme-google-font"
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
    />
    <link
      id="u-page-google-font"
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i"
    />

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "../../public/images/logo.png",
        "sameAs": []
      }
    </script>
    <meta name="theme-color" content="#478ac9" />
    <meta property="og:title" content="assign1" />
    <meta property="og:type" content="website" />
  </head>
  <body class="u-body u-xl-mode">
    <header
      class="u-gradient u-header u-header"
      id="sec-f4f6"
      data-animation-name=""
      data-animation-duration="0"
      data-animation-delay="0"
      data-animation-direction=""
    >
      <div class="u-clearfix u-sheet u-sheet-1">
        <a
          href="https://nicepage.com"
          class="u-image u-logo u-image-1"
          data-image-width="654"
          data-image-height="194"
        >
          <img  
            src="{{url('images/logo.png')}}"
            class="u-logo-image u-logo-image-1"
          />
        </a>
        <a
          href="https://nicepage.com/c/gallery-html-templates"
          class="u-border-none u-btn u-button-style u-custom-color-1 u-custom-font u-font-pt-sans u-hover-custom-color-1 u-btn-1"
          >profile</a
        >
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a
            class="u-social-url"
            target="_blank"
            data-type="YouTube"
            title="YouTube"
            href=""
            ><span class="u-icon u-social-icon u-social-youtube u-icon-1"
              ><svg
                class="u-svg-link"
                preserveAspectRatio="xMidYMin slice"
                viewBox="0 0 112 112"
                style=""
              >
                <use
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  xlink:href="#svg-34f5"
                ></use></svg><svg
                class="u-svg-content"
                viewBox="0 0 112 112"
                x="0"
                y="0"
                id="svg-34f5"
              >
                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                <path
                  fill="#FFFFFF"
                  d="M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z"
                ></path></svg></span>
          </a>
        </div>
      </div>
    </header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-01c0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">
          Basic
          <span style="text-decoration: underline !important">information</span>
        </h2>
        @foreach ($courses as $row)

        
        <ul class="u-align-left u-text u-text-2">
          <li>
            <b
              style="
                font-size: 1.5rem;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
                color: #111111;
              "
              >Course Title:&nbsp;</b> {{ $row->title }}
          </li>
          <li>
            <b
              style="
                font-size: 1.5rem;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
                color: #111111;
              "
              >Course Code:&nbsp;</b> {{$row->code}}
          </li>
          <li>
            <b
              style="
                font-size: 1.5rem;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
                color: #111111;
              "
              >Programme on which the course is given:</b>{{$row->programme}}
          </li>
          <li>
            <b
              style="
                font-size: 1.5rem;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
                color: #111111;
              "
              >Departement Offering the course:&nbsp;</b> {{$row->department_offering}} 
          </li>
          <li>
            <b
              style="
                font-size: 1.5rem;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
                color: #111111;
              "
            >Department teaching the course:</b> {{$row->department_teaching}} 
          </li>
          <li>
            <b
              style="
                font-size: 1.875rem;
                color: #111111;
                font-family: 'Open Sans', sans-serif;
                background-color: #ffffff;
              "
              >Academic Year:</b>{{$row->year}}
          </li>
          <li>
            <b
              style="
                font-size: 1.875rem;
                color: #111111;
                font-family: 'Open Sans', sans-serif;
                background-color: #ffffff;
              ">Level:&nbsp;</b>{{$row->level}}
          </li>
          <li>
            <b
              style="
                font-size: 1.875rem;
                color: #111111;
                font-family: 'Open Sans', sans-serif;
                background-color: #ffffff;
              ">Date of specification approval:&nbsp;</b>{{$row->approval_date}}
          </li>
          <li>
            <b
              style="
                font-size: 1.875rem;
                color: #111111;
                font-family: 'Open Sans', sans-serif;
                background-color: #ffffff;
              ">Credit Hours:&nbsp;</b>{{$row->credit_hours}}
          </li>
          <li>
            <b
              style="
                font-size: 1.875rem;
                color: #111111;
                font-family: 'Open Sans', sans-serif;
                background-color: #ffffff;
              ">Practical:&nbsp;</b>{{$row->practical}}
          </li>
          <li>
            <b
              style="
                font-size: 1.875rem;
                color: #111111;
                font-family: 'Open Sans', sans-serif;
                background-color: #ffffff;
              ">Lecture:&nbsp;</b>{{$row->lectures}}
          </li>
          <li>
            <b
              style="
                font-size: 1.875rem;
                color: #111111;
                font-family: 'Open Sans', sans-serif;
                background-color: #ffffff;
              ">Total:&nbsp;</b>{{$row->total}}
          </li>
          <li>
            <b
              style="
                font-size: 1.875rem;
                color: #111111;
                font-family: 'Open Sans', sans-serif;
                background-color: #ffffff;
              ">Course Prerequisite:&nbsp;</b>{{$row->Prerequisite}}
          </li>
          <li>
            <b
              style="
                font-size: 1.875rem;
                color: #111111;
                font-family: 'Open Sans', sans-serif;
                background-color: #ffffff;
              ">Course coordinator:&nbsp;</b>{{$row->assistant}}
          </li>
         @endforeach
        </ul>
        <div
          class="u-border-3 u-border-grey-dark-1 u-shape u-shape-right u-shape-top u-shape-1"
        ></div>
        <div
          class="u-border-3 u-border-grey-dark-1 u-shape u-shape-bottom u-shape-left u-shape-2"
        ></div>
        <a
          href="{{url('assign2')}}"
          data-page-id="836106269"
          class="u-border-none u-btn u-button-style u-custom-color-2 u-hover-palette-5-dark-3 u-btn-1"
          >NEXT</a
        >
      </div>
    </section>

    <footer
      class="u-align-center u-clearfix u-footer u-grey-80 u-footer"
      id="sec-9d69"
    >
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-left u-large-text u-text u-text-variant u-text-1">
          Copyright © MIU 2021. All rights reserved.<br />
        </p>
        <h5 class="u-align-left u-text u-text-2"></h5>
      </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a
        class="u-link"
        href="https://nicepage.com/website-templates"
        target="_blank"
      >
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span> </a
      >.
    </section>
  </body>
</html>
