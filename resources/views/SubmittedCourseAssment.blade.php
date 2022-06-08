<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Course Assesment</title>
  <link rel="stylesheet" href="{{url('css/nicepage2.css')}}" media="screen">
  <link rel="stylesheet" href="{{url('css/Course-Assesment.css')}}" media="screen">
  <script class="u-script" type="text/javascript" src="{{url('js/jquery.js')}}" defer=""></script>
  <script class="u-script" type="text/javascript" src="{{url('js/nicepage.js')}}" defer=""></script>
  <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
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
  <meta property="og:title" content="Course Assesment">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode">
  <header class="u-clearfix u-header u-header" id="sec-a93c">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="654" data-image-height="194">
        <img src="{{url('images/logo.png')}}" class="u-logo-image u-logo-image-1">
      </a>
    </div>
  </header>
  <section class="u-align-center u-clearfix u-section-1" id="sec-9571">
    <div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-text u-text-default u-text-1">
        <span style="font-size: 1.5rem; font-weight: 700;">Misr&nbsp;</span>
        <span style="font-weight: 700;">
          <span style="font-size: 1.5rem; font-weight: 700;">International</span>
          <span style="font-size: 1.5rem;">University</span>
        </span>
      </p>


      <p class="u-text u-text-2"><b>SUBMITTED Course Assesment</b>
      </p>
      <p class="u-text u-text-3">Please specify how your course ILOs will be assessed and attach your course
        specification to this form&nbsp;</p>
      <p class="u-text u-text-4">
        <br>
        <span style="font-weight: 700;">Department</span>:
        @php
        $data=DB::Table('courses')->select('department_offering')->where('coordinator_id',Auth::user()->id)->get();


        foreach ($data as $key => $value) {
        echo $value->department_offering ;

        }
        @endphp
      </p>
      <p class="u-text u-text-5">
        <span style="font-weight: 700;">Faculty</span>:
        @php
        $data=DB::Table('courses')->select('department_offering')->where('coordinator_id',Auth::user()->id)->get();


        foreach ($data as $key => $value) {
        echo $value->department_offering ;

        }
        @endphp
      </p>
      <p class="u-text u-text-6">
        <br>

        <span style="font-weight: 700;">Semester</span>:
        @php
        $data=DB::Table('courses')->select('semester')->where('coordinator_id',Auth::user()->id)->get();


        foreach ($data as $key => $value) {
        echo $value->semester ;

        }
        @endphp
      </p>
      <p class="u-text u-text-7">

        <span style="font-weight: 700;">Instructor's</span>
        <span style="font-weight: 700;">Name</span>: {{Auth::user()->name}}
      </p>
      <p class="u-text u-text-8">
        <br>
      </p>
      <p class="u-text u-text-9">
        <span style="font-weight: 700;">Course</span>
        <span style="font-weight: 700;">Title</span>:
        @php
        $data=DB::Table('courses')->select('title')->where('coordinator_id',Auth::user()->id)->get();


        foreach ($data as $key => $value) {
        echo $value->title ;

        }
        @endphp
      </p>


    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-2" id="sec-1d1d">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-table u-table-responsive u-table-1">
        <table class="u-table-entity u-table-entity-1">
          <div class="u-expanded-width u-table u-table-responsive u-table-1 scrollmenu">
            <table class="u-table-entity u-table-entity-1">
              <colgroup>
                <col width="1.5%">
                <col width="5.2%">
                <col width="2.1%">
                <col width="8.3%">
                <col width="2.4%">
                <col width="11.1%">
                <col width="2.1%">
                <col width="6.9%">
                <col width="2.4%">
                <col width="7.3%">
                <col width="2.2%">
                <col width="48.5%">
              </colgroup>

              <thead class="u-palette-4-base u-table-header u-table-header-1">
                <tr style="height: 98px;">
                  <th class="u-border-1 u-border-grey-10 u-custom-color-2 u-table-cell u-table-cell-1">ILOs as numbered
                    in course<br>specification&nbsp;
                  </th>
                  <th class="u-border-1 u-border-grey-10 u-custom-color-2 u-table-cell u-table-cell-2">Attendance&nbsp;
                  </th>
                  <th class="u-border-1 u-border-grey-10 u-custom-color-2 u-table-cell u-table-cell-3">Participtaion
                  </th>
                  <th class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-4"></th>
                  <th class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-5"></th>
                  <th class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-6"></th>
                  <th class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-7"></th>
                  <th class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-8"></th>
                  <th class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-9"></th>
                  <th class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-10"></th>
                  <th class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-11"></th>
                  <th class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-12"></th>
                </tr>
              </thead>
              <tbody class="u-table-body">
                <tr style="height: 115px;">
                  <td
                    class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-first-column u-table-cell u-table-cell-13">
                  </td>
                  <td class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-14"></td>
                  <td class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-15"></td>
                  <td class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-16">Written
                    Exam&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>(5th week exam)&nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp;<br>
                  </td>
                  <td class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-17">Research/
                    Project/ Assignment</td>
                  <td class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-18">Oral Exam
                  </td>
                  <td class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-19">
                    Presentation</td>
                  <td class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-24">Practical
                  </td>
                  <td class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-20">Written
                    Exam&nbsp;</td>
                  <td class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-21">Research/
                    Project/ Assignment</td>
                  <td class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-22">Oral Exam
                  </td>
                  <td class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-23">
                    Presentation</td>
                  <td class="u-border-1 u-border-custom-color-2 u-custom-color-2 u-table-cell u-table-cell-24">Practical
                  </td>
                </tr>
                <tr style="height: 85px;">
                  <td class="u-border-1 u-border-grey-30 u-first-column u-table-cell u-white u-table-cell-25">
                    <div>           @php
                                     $data=DB::Table('courseassesment')->select('ilos')->where('prof_id',Auth::user()->id)->get();
                                            foreach ($data as $key => $value) {
                                            echo $value->ilos ;}
                                            @endphp</div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div >@php
                                     $data=DB::Table('courseassesment')->select('attendance')->where('prof_id',Auth::user()->id)->get();
                                            foreach ($data as $key => $value) {
                                            echo $value->attendance ;}
                                            @endphp</div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div >@php
                                     $data=DB::Table('courseassesment')->select('participation')->where('prof_id',Auth::user()->id)->get();
                                            foreach ($data as $key => $value) {
                                            echo $value->participation ;}
                                            @endphp</div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div >@php
                                     $data=DB::Table('courseassesment')->select('PreWrittenExam')->where('prof_id',Auth::user()->id)->get();
                                            foreach ($data as $key => $value) {
                                            echo $value->PreWrittenExam ;}
                                            @endphp</div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div >@php
                                     $data=DB::Table('courseassesment')->select('PreResearch')->where('prof_id',Auth::user()->id)->get();
                                            foreach ($data as $key => $value) {
                                            echo $value->PreResearch ;}
                                            @endphp</div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div >@php
                                     $data=DB::Table('courseassesment')->select('PreOralExam')->where('prof_id',Auth::user()->id)->get();
                                            foreach ($data as $key => $value) {
                                            echo $value->PreOralExam ;}
                                            @endphp</div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div >@php
                                     $data=DB::Table('courseassesment')->select('PrePresentation')->where('prof_id',Auth::user()->id)->get();
                                            foreach ($data as $key => $value) {
                                            echo $value->PrePresentation ;}
                                            @endphp</div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div >@php
                                     $data=DB::Table('courseassesment')->select('PrePractical')->where('prof_id',Auth::user()->id)->get();
                                            foreach ($data as $key => $value) {
                                            echo $value->PrePractical ;}
                                            @endphp</div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div>@php
                                     $data=DB::Table('courseassesment')->select('MidWrittenExam')->where('prof_id',Auth::user()->id)->get();
                                            foreach ($data as $key => $value) {
                                            echo $value->MidWrittenExam ;}
                                            @endphp</div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div>@php
                                     $data=DB::Table('courseassesment')->select('MidResearch')->where('prof_id',Auth::user()->id)->get();
                                            foreach ($data as $key => $value) {
                                            echo $value->MidResearch ;}
                                            @endphp</div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div >@php
                                     $data=DB::Table('courseassesment')->select('MidOralExam')->where('prof_id',Auth::user()->id)->get();
                                            foreach ($data as $key => $value) {
                                            echo $value->MidOralExam ;}
                                            @endphp</div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div >@php
                                     $data=DB::Table('courseassesment')->select('MidPresentation')->where('prof_id',Auth::user()->id)->get();
                                            foreach ($data as $key => $value) {
                                            echo $value->MidPresentation ;}
                                            @endphp</div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div>@php
                                     $data=DB::Table('courseassesment')->select('MidPractical')->where('prof_id',Auth::user()->id)->get();
                                            foreach ($data as $key => $value) {
                                            echo $value->MidPractical ;}
                                            @endphp</div>
                  </td>
                </tr>

                <tr style="height: 81px;">
                  <td class="u-border-1 u-border-grey-30 u-first-column u-table-cell u-white u-table-cell-37">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>&nbsp;
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                </tr>
                <tr style="height: 81px;">
                  <td class="u-border-1 u-border-grey-30 u-first-column u-table-cell u-white u-table-cell-49">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <div contenteditable></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="u-text u-text-body-alt-color u-text-1">Pre-Mid-<span style="font-weight: 700;"></span>Term
            Assessment
          </p>
          <p class="u-text u-text-body-alt-color u-text-2">Mid-Term Grade</p>
          <p class="u-text u-text-body-alt-color u-text-3">Final Grade</p>
      </div>
  </section>


  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-e2a1">
    <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
      <p class="u-text u-text-default u-text-1">Contact us: miuegypt.edu.eg</p>
    </div>
  </footer>
  <section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
      <span>Website Templates</span>
    </a>
    <p class="u-text">
      <span>created with</span>
    </p>
    <a class="u-link" href="" target="_blank">
      <span>Website Builder Software</span>
    </a>.
  </section>
</body>

</html>