<x-app-layout>
    <!DOCTYPE html>
    <html style="font-size: 16px;">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="keywords" content="Forms">
        <meta name="description" content="">
        <meta name="page_type" content="np-template-header-footer-from-plugin">
        <title>All Forms</title>
        <link rel="stylesheet" href="{{url('css/nicepage.css')}}" media="screen">
        <link rel="stylesheet" href="{{url('css/All-Forms.css')}}" media="screen">
        <script class="u-script" type="text/javascript" src="{{url('js/jquery.js')}}" defer=""></script>
        <script class="u-script" type="text/javascript" src="{{url('js/nicepage.js')}}" defer=""></script>
        <meta name="generator" content="Nicepage 4.10.5, nicepage.com">
        <link id="u-theme-google-font" rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


        <script type="application/ld+json">
            {
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": "",
          "logo": "images/logo.png"
  
  }
        </script>
        <meta name="theme-color" content="#478ac9">
        <meta property="og:title" content="All Forms">
        <meta property="og:type" content="website">
    </head>

    <body class="u-body u-xl-mode">

        <section class="u-align-center u-clearfix u-section-1" id="sec-205a">
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <h2 class="u-text u-text-default u-text-1">Courses</h2>

                <div class="u-expanded-width u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                        <div class="u-container-style u-list-item u-repeater-item">
                            {{-- <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                                <span class="u-file-icon u-icon u-icon-circle u-white u-icon-1"><img
                                        src="{{url('images/form1.png')}}" alt=""></span>
                                <p class="u-align-center u-text u-text-custom-color-1 u-text-default u-text-3">Course
                                    Assesment Form</p>
                                <a href="{{url('courseAssesment')}}"
                                    class="u-active-none u-border-2 u-border-palette-2-light-1 u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-body-color u-btn-1">Enter</a>
                            </div> --}}
                        </div>
                        <div class="u-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span
                                    class="u-file-icon u-icon u-icon-circle u-white u-icon-2"><img
                                        src="{{url('images/form2.png')}}" alt=""></span>
                                <p class="u-align-center u-text u-text-custom-color-1 u-text-default u-text-4">
                                    @php

                                    $data=DB::Table('courses')->select('title')->where('coordinator_id',Auth::user()->id)->get();

                                    foreach ($data as $key => $value) {
                                    echo $value->title;
                                    }

                                    @endphp
                                </p>
                                <a href="{{url('allforms')}}"
                                    class="u-active-none u-border-2 u-border-palette-2-light-1 u-btn u-btn-rectangle u-button-style u-hover-none u-text-body-color u-btn-2">Enter</a>
                            </div>
                        </div>
                        {{-- <div class="u-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span
                                    class="u-file-icon u-icon u-icon-circle u-white u-icon-3"><img
                                        src="{{url('images/form3.png')}}" alt=""></span>
                                <p class="u-align-center u-text u-text-custom-color-1 u-text-default u-text-5">Course
                                    Specification Form
                                </p>
                                <a href="{{url('specs1')}}"
                                    class="u-active-none u-border-2 u-border-palette-2-light-1 u-btn u-btn-rectangle u-button-style u-hover-none u-text-body-color u-btn-3">Enter</a>
                                </script> --}}


    </body>

    </html>
</x-app-layout>