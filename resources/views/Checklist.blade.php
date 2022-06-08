<x-app-layout>
  <!DOCTYPE html>
  <html style="font-size: 16px;">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Checklist</title>
    <link rel="stylesheet" href="{{url('css/nicepageChecklist.css')}}" media="screen">
    <link rel="stylesheet" href="{{url('css/Checklist.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{url('js/nicepageChecklist.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">
      {
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Misr_International_University_logo.png"
}
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Checklist">
    <meta property="og:type" content="website">
  </head>

  <body class="u-body u-xl-mode">
    {{-- <header class="u-clearfix u-gradient u-header u-header" id="sec-8e70"><a href="https://nicepage.com"
        class="u-image u-logo u-image-1" data-image-width="460" data-image-height="217">
        <img src="{{url('images/logo.png')}}" class="u-logo-image u-logo-image-1">
      </a></header> --}}
    <section class="u-align-center u-clearfix u-section-1" id="sec-c2e1">
      <div class="u-clearfix u-sheet u-sheet-1" style="margin-top: 50px">
        {{-- <div class="u-border-3 u-border-custom-color-3 u-container-style u-custom-color-3 u-group u-group-1"> --}}
          {{-- <div class="u-container-layout u-valign-middle u-container-layout-1">
            <p class="u-text u-text-default u-text-1">Admin's Name<span style="font-weight: 700;"></span>
            </p>
          </div> --}}
        {{-- </div> --}}
        <div class="u-border-2 u-border-grey-75 u-container-style u-custom-color-3 u-expanded-width u-group u-group-2">
          <div class="u-container-layout u-container-layout-2">
            <p class="u-text u-text-2" style="margin-left: 20px">MIU Checklist</p>
          </div>
        </div>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1" style="margin-left: 50px">
            <colgroup>
              <col width="2.3%">
              <col width="5.6%">
              <col width="5%">
              <col width="3.3%">
              <col width="12.8%">
              <col width="4%">
              <col width="6.9%">
              <col width="10%">
              <col width="8.5%">
              <col width="4.5%">
              <col width="12.2%">
              <col width="8%">
              <col width="8.9%">
              <col width="7.8999999999999915%">
            </colgroup>
            <thead class="u-palette-4-base u-table-header u-table-header-1">
              <tr style="height: 21px;">
                <th class="u-border-1 u-border-palette-4-base u-custom-color-2 u-table-cell u-table-cell-1">No.</th>
                <th class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-2">Course Code
                </th>
                <th class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-3">Doctor's
                  Name
                </th>
                <th class="u-border-1 u-border-palette-4-base u-custom-color-2 u-table-cell u-table-cell-4">Course Title
                </th>
                <th class="u-border-1 u-border-palette-4-base u-custom-color-2 u-table-cell u-table-cell-5">Course Specs
                </th>
                <th class="u-border-1 u-border-palette-4-base u-custom-color-2 u-table-cell u-table-cell-6">
                  Assesment<br>Plan
                </th>
                <th class="u-border-1 u-border-palette-4-base u-custom-color-2 u-table-cell u-table-cell-7">
                  Assignment<br>Assess
                </th>

              </tr>
            </thead>

            @foreach ($courses as $row)
            <tbody class="u-table-body">
              <tr style="height: 58px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-15">1</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">{{$row->code}}</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">{{$row->assistant}}&nbsp;<br>
                </td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"> {{$row->title}}&nbsp;<br>
                </td>
                <div class="checkbox checkbox-styled">
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    @php
                    $check_if_exists =
                    DB::table("checklist")->select()->where('user_id',$row->coordinator_id)->where('form_type','specs')->get();
                    if(count($check_if_exists)){
                    echo "done";
                    }else{
                    echo "not done";
                    }

                    @endphp
                    <label>
                  <td class="u-border-1 u-border-grey-30 u-table-cell"> @php
                    $check_if_exists =
                    DB::table("checklist")->select()->where('user_id',$row->coordinator_id)->where('form_type','aa')->get();
                    if(count($check_if_exists)){
                    echo "done";
                    }else{
                    echo "not done";
                    }

                    @endphp</td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell"> @php
                    $check_if_exists =
                    DB::table("checklist")->select()->where('user_id',$row->coordinator_id)->where('form_type','ca')->get();
                    if(count($check_if_exists)){
                    echo "done";
                    }else{
                    echo '<p style="color: red; text-align: center"> not done' ;
                      }

                      @endphp</td>
                </div>
                <!-- <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td> -->
              </tr>
        </div>
        @endforeach
        <!-- <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-29">Row 2</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">dr</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
              </tr>
              
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-43">Row 3</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">dr</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-57">Row 4</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">dr</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">DB</td>
              </tr> -->
        <!-- <div class="u-container-layout">
            <p class="u-text u-text-default u-text-3">Midterm Exam</p>
          </div>
        </div>
        <div class="u-border-3 u-border-custom-color-2 u-container-style u-custom-color-2 u-group u-group-4">
          <div class="u-container-layout">
            <p class="u-text u-text-default u-text-4">Final Exam</p>
          </div>
        </div>
            </tbody>
          </table>
        </div>
         -->
        <!-- <div class="u-border-3 u-border-custom-color-2 u-container-style u-custom-color-2 u-group u-group-3">
          <div class="u-container-layout">
            <p class="u-text u-text-default u-text-3">Midterm Exam</p>
          </div>
        </div>
        <div class="u-border-3 u-border-custom-color-2 u-container-style u-custom-color-2 u-group u-group-4">
          <div class="u-container-layout">
            <p class="u-text u-text-default u-text-4">Final Exam</p>
          </div>
        </div>
      </div> -->

    </section>


    <!-- <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-0322"></footer> -->
    <!-- <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section> -->

  </body>

  </html>
</x-app-layout>