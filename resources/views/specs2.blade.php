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


<body class="u-body u-xl-mode">

  </header>
  </header>
  <section class="u-align-center u-border-15 u-border-black u-border-no-bottom u-clearfix u-section-1" id="sec-41b1">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-align-center u-border-2 u-border-grey-75 u-grey-70 u-shape u-shape-rectangle u-shape-1"></div>
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
            <span style="font-size: 1.875rem"><b></b><b>&nbsp;a-&nbsp;&nbsp; </b>
              <!--[endif]--><b>Knowledge and understanding:</b>&nbsp;&nbsp;
            </span>
            <br />



            <form action="http://127.0.0.1:8000/specs2/updatedku" method="POST"
              class="u-align-left u-text u-text-4 u-text-default ">
              <span style="font-size: 50%" contenteditable="true">

                <input type="checkbox" name="ilos[]" value="test "> test <br />
                <input type="checkbox" name="ilos[]" value="test"> test <br />
                <input type="checkbox" name="ilos[]" value="test"> test <br />
                <input type="checkbox" name="ilos[]" value="test"> test <br />
                <input type="checkbox" name="ilos[]" value="test"> test <br />
                <input type="checkbox" name="ilos[]" value="test "> test <br />
                <input type="checkbox" name="ilos[]" value="test"> test <br /><br />

              </span>



          </h2>

        </div>
      </div>
      <div class="u-form u-form-1">

        <div class="u-form u-form-1">
          <form action="http://127.0.0.1:8000/specs2/updatedku" method="POST"
            class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" style="padding: 10px;">
            <div class="u-form-group u-form-textarea u-form-group-1">
              <label for="textarea-c3fb" class="u-form-control-hidden u-label"></label>
              <textarea rows="5" cols="50" id="textarea-c3fb" name="content"
                class="u-border-3 u-border-grey-75 u-input u-input-rectangle u-palette-5-light-2 u-radius-6 u-input-1"
                required=""
                placeholder="By the end of this course, the student should demonstrate comprehensive knowledge and clear understanding of the following:"></textarea>
            </div>
            <div class="u-align-center u-form-group u-form-submit">

              <input type="submit" value="submit"
                class="u-border-none u-btn u-button-style u-grey-75 u-hover-grey-90 u-btn-2">
            </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>


        <div class="u-form-send-message u-form-send-success">
          Thank you! Your message has been sent.
        </div>
        <div class="u-form-send-error u-form-send-message">
          Unable to send your message. Please fix errors then try again.
        </div>
        <input type="hidden" value="" name="recaptchaResponse" />
        </form>
      </div>
      <h2 class="u-text u-text-white u-text-4">
        <b>B- Professional information</b>
      </h2>

    </div>
    </div>
    </div>
  </section>

  {{-- ///////////////////////////////////////////// --}}

  {{-- BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB --}}


  <section class="u-align-center u-border-15 u-border-grey-90 u-border-no-bottom u-border-no-top u-clearfix u-section-2"
    id="carousel_cbe0">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-container-style u-group u-group-1">
        <div class="u-container-layout">
          <h2 class="u-align-left u-text u-text-default u-text-1">
            <span style="font-size: 1.875rem"><b>&nbsp; b-&nbsp;</b><b>Intellectual skills:</b>&nbsp;&nbsp;&nbsp;
            </span>
            <br />

            <form action="http://127.0.0.1:8000/specs2/updateis" method="POST"
              class="u-align-left u-text u-text-4 u-text-default ">
              <span style="font-size: 50%" contenteditable="true">
                @csrf

                <input type="checkbox" name="ilos[]" value="test "> test <br />
                <input type="checkbox" name="ilos[]" value="test"> test <br />
                <input type="checkbox" name="ilos[]" value="test"> test <br />
                <input type="checkbox" name="ilos[]" value="test"> test <br />
                <input type="checkbox" name="ilos[]" value="test"> test <br />
                <input type="checkbox" name="ilos[]" value="test "> test <br />
                <input type="checkbox" name="ilos[]" value="test"> test <br />
                <br />
              </span>
            </form>
          </h2>

          <div class="u-form u-form-1">

            <div class="u-form u-form-1">
              <form action="http://127.0.0.1:8000/specs2/updateis" method="POST"
                class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom"
                style="padding: 10px;">
                <div class="u-form-group u-form-textarea u-form-group-1">
                  <label for="textarea-c3fb" class="u-form-control-hidden u-label"></label>
                  <textarea rows="5" cols="50" id="textarea-c3fb" name="content"
                    class="u-border-3 u-border-grey-75 u-input u-input-rectangle u-palette-5-light-2 u-radius-6 u-input-1"
                    required="" placeholder="By the end of this course, the student should be able to:"></textarea>
                </div>
                <div class="u-align-center u-form-group u-form-submit">

                  <input type="submit" value="submit"
                    class="u-border-none u-btn u-button-style u-grey-75 u-hover-grey-90 u-btn-2">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>


            <div class="u-form-send-message u-form-send-success">
              Thank you! Your message has been sent.
            </div>
            <div class="u-form-send-error u-form-send-message">
              Unable to send your message. Please fix errors then try again.
            </div>
            <input type="hidden" value="" name="recaptchaResponse" />
            </form>
          </div>


          {{-- <div class="u-form u-form-1">
            <form action="http://127.0.0.1:8000/specs2/updateis" method="POST"
              class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form"
              style="padding: 10px">
              <div class="u-form-group u-form-textarea u-form-group-1">
                <label for="textarea-c3fb" class="u-form-control-hidden u-label"></label>
                <textarea rows="5" cols="50" id="textarea-c3fb" name="textarea"
                  class="u-border-5 u-border-grey-75 u-input u-input-rectangle u-palette-5-light-2 u-radius-6 u-input-1"
                  required="" placeholder="By the end of this course, the student should be able to:"></textarea>
              </div>
              <div class="u-align-center u-form-group u-form-submit">
                <a href="#"
                  class="u-border-none u-btn u-btn-submit u-button-style u-none u-text-body-alt-color u-btn-1">Submit</a>
                <input type="submit" value="submit" class="u-form-control-hidden" />
              </div>
              <div class="u-form-send-message u-form-send-success">
                Thank you! Your message has been sent.
              </div>
              <div class="u-form-send-error u-form-send-message">
                Unable to send your message. Please fix errors then try again.
              </div>
              <div class="u-align-center u-form-group u-form-submit">

                <input type="submit" value="submit"
                  class="u-border-none u-btn u-button-style u-grey-75 u-hover-grey-90 u-btn-2">
              </div>
              <input type="hidden" value="" name="recaptchaResponse" />
            </form> --}}

          </div>
        </div>
      </div>
    </div>
  </section>


  {{-- CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC --}}


  <section class="u-align-center u-border-16 u-border-grey-75 u-border-no-bottom u-border-no-top u-clearfix u-section-3"
    id="carousel_e52f">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h2 class="u-align-left u-text u-text-1">
        <span style="font-size: 1.875rem"><b></b>&nbsp;<b>c-&nbsp;</b><b>Professional and practical skills:</b>&nbsp;
          &nbsp; &nbsp;
          &nbsp;
        </span>
        <br />
        <form action="" method="POST" class="u-align-left u-text u-text-4 u-text-default ">
          <span style="font-size: 50%" contenteditable="true">
            @csrf

            <input type="checkbox" name="ilos[]" value="test "> test <br />
            <input type="checkbox" name="ilos[]" value="test"> test <br />
            <input type="checkbox" name="ilos[]" value="test"> test <br />
            <input type="checkbox" name="ilos[]" value="test"> test <br />
            <input type="checkbox" name="ilos[]" value="test"> test <br /><br />
          </span>
        </form>
      </h2>
      <div class="u-form u-form-1">
        <form action="http://127.0.0.1:8000/specs2/updatepps" method="POST"
          class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form"
          style="padding: 10px">
          <div class="u-form-group u-form-textarea u-form-group-1">
            <label for="textarea-c3fb" class="u-form-control-hidden u-label"></label>
            <textarea rows="5" cols="50" id="textarea-c3fb" name="textarea"
              class="u-border-5 u-border-grey-75 u-input u-input-rectangle u-palette-5-light-2 u-radius-6 u-input-1"
              required="" placeholder="By the end of this course, the student should be able to:"></textarea>
          </div>
          <div class="u-align-center u-form-group u-form-submit">
            <a href="#"
              class="u-border-none u-btn u-btn-submit u-button-style u-none u-text-body-alt-color u-btn-1">Submit</a>
            <div class="u-align-center u-form-group u-form-submit">

              <input type="submit" value="submit"
                class="u-border-none u-btn u-button-style u-grey-75 u-hover-grey-90 u-btn-2">
            </div>
          </div>
          <div class="u-form-send-message u-form-send-success">
            Thank you! Your message has been sent.
          </div>
          <div class="u-form-send-error u-form-send-message">
            Unable to send your message. Please fix errors then try again.
          </div>
          <input type="hidden" value="" name="recaptchaResponse" />
        </form>
      </div>
    </div>
  </section>


  {{-- DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD --}}
  <section class="u-align-center u-border-15 u-border-grey-75 u-border-no-top u-clearfix u-section-4"
    id="carousel_f6bb">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-align-left u-text u-text-1">
        <span style="font-size: 1.875rem"><b></b>&nbsp;<b>d-&nbsp;&nbsp; </b>
          <!--[endif]--><b>General and Transfer​able Skills:</b>&nbsp;&nbsp;
        </span>
        <br />
        <form action="/checkbox-example" method="POST" class="u-align-left u-text u-text-4 u-text-default ">
          <span style="font-size: 50%" contenteditable="true">
            @csrf

            <input type="checkbox" name="ilos[]" value="test "> test <br />
            <input type="checkbox" name="ilos[]" value="test"> test <br />
            <input type="checkbox" name="ilos[]" value="test"> test <br />
            <input type="checkbox" name="ilos[]" value="test"> test <br />
            <input type="checkbox" name="ilos[]" value="test"> test <br /><br />
          </span>
        </form>
      </h2>
      <div class="u-form u-form-1">
        <form action="http://127.0.0.1:8000/specs2/updategts" method="POST"
          class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form"
          style="padding: 10px">
          <div class="u-form-group u-form-textarea u-form-group-1">
            <label for="textarea-c3fb" class="u-form-control-hidden u-label"></label>
            <textarea rows="5" cols="50" id="textarea-c3fb" name="textarea"
              class="u-border-5 u-border-grey-75 u-input u-input-rectangle u-palette-5-light-2 u-radius-6 u-input-1"
              required="" placeholder="By the end of this course, the student should be able to:"></textarea>
          </div>
          <div class="u-align-center u-form-group u-form-submit">
            <a href="#"
              class="u-border-none u-btn u-btn-submit u-button-style u-none u-text-body-alt-color u-btn-1">Submit</a>
            <div class="u-align-center u-form-group u-form-submit">

              <input type="submit" value="submit"
                class="u-border-none u-btn u-button-style u-grey-75 u-hover-grey-90 u-btn-2">
            </div>
          </div>
          <div class="u-form-send-message u-form-send-success">
            Thank you! Your message has been sent.
          </div>
          <div class="u-form-send-error u-form-send-message">
            Unable to send your message. Please fix errors then try again.
          </div>
          <input type="hidden" value="" name="recaptchaResponse" />
        </form>
      </div>
      <a href="specs_teaching-methods.html"
        class="u-border-none u-btn u-button-style u-hover-palette-5-dark-3 u-palette-5-dark-2 u-btn-2">NEXT</a>
    </div>
  </section>
  <div class="u-block-0616-1 u-custom-color-1 u-section-row" id="carousel_63f2">
    <div class="u-align-left u-block-0616-2 u-clearfix u-sheet"></div>
    <style data-mode="XL">
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
    </style>
    <style data-mode="LG">
      @media (max-width: 1199px) {
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