<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>doctorDetails</title>
    <link rel="stylesheet" href="{{url('css/doctorDetails2.css')}}" media="screen">
<link rel="stylesheet" href="{{url('css/doctorDetails.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src= "{{url('js/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{url('js/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "/images/Misr_International_University_logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="doctorDetails">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-gradient u-header u-header" id="sec-8e70"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="460" data-image-height="217">
          <img src="/images/Misr_International_University_logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-container-style u-custom-color-2 u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-valign-bottom u-container-layout-1">
            <p class="u-align-center u-text u-text-1">Doctor's name</p>
          </div>
        </div><span class="u-file-icon u-icon u-text-custom-color-2 u-icon-1"><img src="/images/2.png" alt=""></span>
      </div></header>
    <section class="u-border-5 u-border-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-clearfix u-custom-color-4 u-valign-bottom u-section-1" id="sec-20ea">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-align-center u-clearfix u-gradient u-section-2" id="carousel_2cbc">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="{{url('addDR')}}" class="u-border-none u-btn u-button-style u-custom-color-4 u-hover-custom-color-3 u-btn-1">Add proffesor</a>
        <div class="u-container-style u-custom-color-4 u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h4 class="u-text u-text-white u-text-1">MIU Professor Table</h4>
          </div>
        </div>
        <div class="u-container-style u-group u-group-2">
          <div class="u-container-layout">
            <div class="u-table u-table-responsive u-table-1">
              <table class="u-table-entity u-table-entity-1">
                <colgroup>
                  <col width="20.9%">
                  <col width="19.4%">
                  <col width="20.8%">
                  <col width="18.5%">
                  <col width="20.400000000000006%">
                </colgroup>
                <thead class="u-align-center u-custom-color-2 u-table-header u-table-header-1">
                  <tr style="height: 26px;">
                    <th class="u-table-cell">Doctor Name&nbsp;</th>
                    <th class="u-table-cell"> Doctor ID</th>
                    <th class="u-table-cell">Doctor Course</th>
                    <th class="u-table-cell">Course ID</th>
                    <th class="u-table-cell">Delete</th>
                  </tr>
                </thead>
                @foreach($courses as $row)
                <tbody class="u-align-center u-table-alt-white u-table-body u-text-custom-color-4 u-white u-table-body-1">
                  <tr style="height: 58px;">
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-6">{{$row->assistant}}</td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-7"> {{$row->coordinator_id}}</td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-8"> {{$row->title}}</td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-9"> {{$row->code}}</td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-10"></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <a href="https://nicepage.com/static-site-generator" class="u-border-2 u-btn u-button-style u-custom-color-3 u-hover-palette-1-dark-1 u-btn-2">Delete</a>
           <a href="https://nicepage.com/static-site-generator" class="u-border-2 u-btn u-button-style u-custom-color-3 u-hover-palette-1-dark-1 u-btn-4">Delete</a>
            <a href="https://nicepage.com/static-site-generator" class="u-border-2 u-btn u-button-style u-custom-color-3 u-hover-palette-1-dark-1 u-btn-5">Delete</a>
            <a href="https://nicepage.com/static-site-generator" class="u-border-2 u-btn u-button-style u-custom-color-3 u-hover-palette-1-dark-1 u-btn-6">Delete</a>
             <a href="https://nicepage.com/static-site-generator" class="u-border-2 u-btn u-button-style u-custom-color-3 u-hover-palette-1-dark-1 u-btn-7">Delete</a> 
            <a href="https://nicepage.com/static-site-generator" class="u-border-2 u-btn u-button-style u-custom-color-3 u-hover-palette-1-dark-1 u-btn-8">Delete</a>
            <a href="https://nicepage.com/static-site-generator" class="u-border-2 u-btn u-button-style u-custom-color-3 u-hover-palette-1-dark-1 u-btn-9">Delete</a>
             <a href="https://nicepage.com/static-site-generator" class="u-border-2 u-btn u-button-style u-custom-color-3 u-hover-palette-1-dark-1 u-btn-10">Delete</a>
            <a href="https://nicepage.com/static-site-generator" class="u-border-2 u-btn u-button-style u-custom-color-3 u-hover-palette-1-dark-1 u-btn-11">Delete</a>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-valign-middle u-footer" id="sec-0322"><p class="u-small-text u-text u-text-variant u-text-1"> Copyright © MIU 2021. All rights reserved.</p></footer>
  </body>
</html>