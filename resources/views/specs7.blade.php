<x-app-layout>
    @include ('header2')
    <title>Course-specs5</title>
    <link rel="stylesheet" href="{{url('css/nicepage3.css')}}" media="screen">
    <link rel="stylesheet" href="{{url('css/specs_facilities.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{url('js/jquery2.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{url('js/nicepage2.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 4.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">




    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": "",
          "logo": "../../public/images/logo.png"
  }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Course-specs5">
    <meta property="og:type" content="website">
    </head>

    <body class="u-body u-xl-mode">

        </header>
        <section class="u-border-15 u-border-grey-75 u-clearfix u-section-1" id="sec-5e2c">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div
                    class="u-align-center u-border-2 u-border-grey-75 u-container-style u-grey-70 u-group u-shape-rectangle u-group-1">
                    <div class="u-container-layout u-container-layout-1">
                        <h2 class="u-text u-text-default u-text-1">
                            <b>Teaching and learning methods</b>
                        </h2>
                    </div>
                </div>
                <h3 class="u-text u-text-default u-text-2">
                    <b> -&nbsp;</b><b>Teaching and learning methods</b>
                </h3>
                <ul class="u-text u-text-default u-text-3">
                    <li>Student Portal.&nbsp;</li>
                    <li>MIU Moodle.&nbsp;</li>
                    <li>MIU Mail.&nbsp;</li>
                    <li>
                        Computer laboratory equipped with Pentium based computers with
                        OpenCV&nbsp;&nbsp;
                    </li>
                </ul>

                <script>
                    function toggleText() {
            var text = document.getElementById("signature");
            var button = document.getElementById("signbutton");
            if (text.style.display === "none") {
              text.style.display = "block";
              button.textContent = "click here to unsign";
            } else {
              text.style.display = "none";
              button.textContent = "click here to sign";
            }
          }
                </script>


                {{-- <p id="signature" style="display: none">Dr. Alaa Hamdy</p> --}}
                <p id="signature" style="display: none">{{Auth::user()->name}}</p>

                <label id="currentDate"></label>

                <button id="signbutton" type="button" onclick="toggleText();ShowLocalDate()"
                    class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">
                    Click here to sign
                </button>

                <!-- <h4 class="u-text u-text-default u-text-1" style="float:right;">Date:</h4> -->
            </div>


            <a href="{{url('dashboard')}}"
                class="u-border-none u-btn u-button-style u-grey-75 u-hover-grey-90 u-btn-2">submit</a>
            </div>
        </section>

        <script>
            function ShowLocalDate() {
        var dNow = new Date();
        var localdate =
          dNow.getMonth() + 1 + "/" + dNow.getDate() + "/" + dNow.getFullYear();
        document.getElementById("currentDate").innerHTML = localdate;
      }
        </script>


        <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9d69">
            <div class="u-clearfix u-sheet u-sheet-1">
                <p class="u-align-left u-large-text u-text u-text-variant u-text-1">
                    Copyright © MIU 2021. All rights reserved.<br />
                </p>
                <h5 class="u-align-left u-text u-text-2"></h5>
            </div>
        </footer>



    </body>

    </html>
</x-app-layout>