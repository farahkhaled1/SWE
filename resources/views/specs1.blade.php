<x-app-layout>
  @include('header2')
  <!DOCTYPE html>
  <html style="font-size:16px; ">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Professional information">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>specs_aims</title>
    <link rel="stylesheet" href="{{url('css/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{url('css/specs_aims.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{url('js/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{url('js/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 4.6.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i">


    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "../../../images/logo.png",
        "sameAs": []
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="specs_aims">
    <meta property="og:type" content="website">
  </head>

  <body class="u-body u-xl-mode">

    </header>
    <section class="u-border-16 u-border-grey-75 u-clearfix u-section-1" id="sec-aa1f">
      <div class="u-clearfix u-sheet u-sheet-1" style="margin:20px">
        <div class="u-align-center u-border-2 u-border-grey-75 u-grey-70 u-shape u-shape-rectangle u-shape-1"></div>
        <h2 class="u-text u-text-default u-text-black u-text-1">A-&nbsp;<b>Professional information</b>
        </h2>
        <h4 class="u-text u-text-default u-text-2"><b>- Overall aims of the course:</b>
        </h4>
        <div class="u-form u-form-1">
          <form action="http://127.0.0.1:8000/specs1/updatedaims" method="POST"
            class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" style="padding: 10px;">
            <div class="u-form-group u-form-textarea u-form-group-1">
              <label for="textarea-c3fb" class="u-form-control-hidden u-label"></label>
              <textarea rows="5" cols="50" id="textarea-c3fb" name="content"
                class="u-border-5 u-border-grey-75 u-input u-input-rectangle u-palette-5-light-2 u-radius-6 u-input-1"
                required="" placeholder="This course aims to:"></textarea>
            </div>
            <div class="u-align-center u-form-group u-form-submit">

              <input type="submit" value="submit"
                class="u-border-none u-btn u-button-style u-grey-75 u-hover-grey-90 u-btn-2">
            </div>
            <input type="hidden" value="" name="recaptchaResponse">


          </form>
        </div>
      </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9d69">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-left u-large-text u-text u-text-variant u-text-1">Copyright © MIU 2021. All rights
          reserved.<br>
        </p>
        <h5 class="u-align-left u-text u-text-2"></h5>
      </div>
    </footer>

  </html>
</x-app-layout>