<x-app-layout>

    @include('header2')
    @include('headerilos')
    <!DOCTYPE html>
    <html style="font-size: 16px">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />
        <meta name="keywords" content="B- Professional&nbsp;information, Overall aims of course:" />
        <meta name="description" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="page_type" content="np-template-header-footer-from-plugin" />
        <title>specs_ILO</title>
        <link rel="stylesheet" href="{{url('css/nicepage.css')}}" media="screen">
        <link rel="stylesheet" href="{{url('css/specs_ILO.css')}}" media="screen">
        <script class="u-script" type="text/javascript" src="{{url('js/jquery.js')}}" defer=""></script>
        <script class="u-script" type="text/javascript" src="{{url('js/nicepage.js')}}" defer=""></script>
        <meta name="theme-color" content="#478ac9" />
        <meta property="og:title" content="specs_ILO" />
        <meta property="og:type" content="website" />
    </head>


    {{-- ////////////////// --}}
    <script>
        document.mainForm.onclick = function(){
    renderYourText()
  }
  function renderYourText(){
    var select = document.getElementById('colorselector');
    var x = select.options[select.selectedIndex].value;
    document.getElementById('result').innerHTML =x;
  }
    </script>

    <body class="u-body u-xl-mode">


        </header>
        </header>
        <section class="u-align-center u-border-15 u-border-black u-border-no-bottom u-clearfix u-section-1"
            id="sec-41b1">
            <div class="u-clearfix u-sheet u-sheet-1" style="padding: 30px">
                <div class=" u-align-center u-border-2 u-border-grey-75 u-grey-70 u-shape u-shape-rectangle u-shape-1">
                </div>
                <h2 class="u-text u-text-default u-text-white u-text-1">
                    <b>B- Professional information</b>
                </h2>
                <div class="u-align-center u-palette-5-dark-1 u-shape u-shape-rectangle u-shape-2"></div>
                <h2 class="u-text u-text-default u-text-white u-text-2">
                    <b>&nbsp;Intended learning outcomes of course (ILOs)</b>
                </h2>
                {{-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA --}}


                <div class="u-container-style u-group u-group-1">
                    <div class="u-container-layout u-container-layout-1">
                        <h2 class="u-align-left u-text u-text-3">
                            <span style="font-size: 1.875rem"><b></b><b>&nbsp;A-&nbsp;&nbsp; </b>
                                <!--[endif]--><b>Knowledge and understanding:</b>&nbsp;&nbsp;
                            </span>
                            <br />

                            <h6>
                                By the end of this course, the student should demonstrate comprehensive
                                knowledge and clear understanding of the following:
                            </h6>
                            <p style="color: gray">Type in the following text boxes:</p>
                            <br />



                            <form name="ilos1" action="http://127.0.0.1:8000/specs2/updatedku" method="POST"
                                class="u-align-left u-text u-text-4 u-text-default ">
                                <div class="u-form u-form-1">
                                    @php
                                    $data = DB::table('constant_ilos')->where('type','k&u')->get();


                                    foreach ($data as $key => $value) {
                                    echo '<input style="width:700px;" required="" name="'.$value->id.'" id="'.$value->id.'"
                                        value="'.$value->content.'">';
                                    echo '<br>';

                                    }
                                    @endphp
                                    <br>
                                    <textarea required="" rows="5" cols="50" id="textarea" name="content"
                                        placeholder="other"></textarea>
                                </div>


                    </div>

                </div>



                <input type="submit" value="submit" style="float:right "
                    class=" u-border-none u-btn u-button-style u-grey-75 u-hover-grey-90 ">

                </form>

                </h2>

            </div>
            </div>
            </div>





            </div>
            </div>
            </div>
        </section>
</x-app-layout>



<style data-mode=" XL">
    .u-block-0616-1 {
        background-image: none;
        margin-top: 0;
        margin-bottom: 0;
    }

    .u

    .u-block-0616-2 {
        min-height: 90px;
    }

    .u-block-0616-3 {
        margin-top: 32px;
        margin-right: auto;
        margin-bottom: 32px;
        margin-left: 0;
    }

    .u-block-0616-4 {
        font-size: 1rem;
        letter-spacing: 0px;
        text-transform: uppercase;
        font-weight: 400;
    }

    .u-block-0616-9 {
        box-shadow: 2px 2px 8px 0 rgba(128, 128, 128, 1);
    }

    .u-block-0616-8 {
        font-size: 1.25rem;
    }

    .u-block-0616-10 {
        box-shadow: 2px 2px 8px 0 rgba(128, 128, 128, 1);
    }

    </><style data-mode="LG">@media (max-width: 1199px) {
        .u-block-0616-1 {
            background-image: none;
            margin-top: 0;
            margin-bottom: 0;
        }

        .u-block-0616-2 {
            min-height: 90px;
        }

        .u-block-0616-3 {
            margin-top: 32px;
            margin-right: auto;
            margin-bottom: 32px;
            margin-left: 0;
        }

        .u-block-0616-4 {
            font-size: 1rem;
            letter-spacing: 0px;
            font-weight: 400;
            text-transform: uppercase;
        }

        .u-block-0616-9 {
            box-shadow: 2px 2px 8px 0 rgba(128, 128, 128, 1);
        }

        .u-block-0616-8 {
            font-size: 1.25rem;
        }

        .u-block-0616-10 {
            box-shadow: 2px 2px 8px 0 rgba(128, 128, 128, 1);
        }
    }
</style>
<style data-mode="MD">
    @media (max-width: 991px) {
        .u-block-0616-1 {
            background-image: none;
            margin-top: 0;
            margin-bottom: 0;
        }

        .u-block-0616-2 {
            min-height: 90px;
        }

        .u-block-0616-3 {
            margin-top: 32px;
            margin-right: auto;
            margin-bottom: 32px;
            margin-left: 0;
        }

        .u-block-0616-4 {
            font-size: 1rem;
            letter-spacing: 0px;
            font-weight: 400;
            text-transform: uppercase;
        }

        .u-block-0616-9 {
            box-shadow: 2px 2px 8px 0 rgba(128, 128, 128, 1);
        }

        .u-block-0616-8 {
            font-size: 1.25rem;
        }

        .u-block-0616-10 {
            box-shadow: 2px 2px 8px 0 rgba(128, 128, 128, 1);
        }
    }
</style>
<style data-mode="SM">
    @media (max-width: 767px) {
        .u-block-0616-1 {
            background-image: none;
            margin-top: 0;
            margin-bottom: 0;
        }

        .u-block-0616-2 {
            min-height: 90px;
        }

        .u-block-0616-3 {
            margin-top: 32px;
            margin-right: auto;
            margin-bottom: 32px;
            margin-left: 0;
        }

        .u-block-0616-4 {
            font-size: 1rem;
            letter-spacing: 0px;
            font-weight: 400;
            text-transform: uppercase;
        }

        .u-block-0616-9 {
            box-shadow: 2px 2px 8px 0 rgba(128, 128, 128, 1);
        }

        .u-block-0616-8 {
            font-size: 1.25rem;
        }

        .u-block-0616-10 {
            box-shadow: 2px 2px 8px 0 rgba(128, 128, 128, 1);
        }
    }
</style>
<style data-mode="XS">
    @media (max-width: 575px) {
        .u-block-0616-1 {
            background-image: none;
            margin-top: 0;
            margin-bottom: 0;
        }

        .u-block-0616-2 {
            min-height: 90px;
        }

        .u-block-0616-3 {
            margin-top: 32px;
            margin-right: auto;
            margin-bottom: 32px;
            margin-left: 0;
        }

        .u-block-0616-4 {
            font-size: 1rem;
            letter-spacing: 0px;
            font-weight: 400;
            text-transform: uppercase;
        }

        .u-block-0616-9 {
            box-shadow: 2px 2px 8px 0 rgba(128, 128, 128, 1);
        }

        .u-block-0616-8 {
            font-size: 1.25rem;
        }

        .u-block-0616-10 {
            box-shadow: 2px 2px 8px 0 rgba(128, 128, 128, 1);
        }
    }
</style>
</div>

<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9d69">
    <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-left u-large-text u-text u-text-variant u-text-1">
            Copyright © MIU 2021. All rights reserved.<br />
        </p>
        <h5 class="u-align-left u-text u-text-2"></h5>
    </div>
</footer>

</section>
</body>

</html>