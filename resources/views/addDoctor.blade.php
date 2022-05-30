<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>addDoctor</title>
  <link rel="stylesheet" href="{{url('css/addDoctor2.css')}}" media="screen">
  <link rel="stylesheet" href="{{url('css/addDoctor.css')}}" media="screen">
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
		"logo": "/images/Misr_International_University_logo.png"
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
}
  </script>
  <!-- <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="addDoctor">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode">
</body>
 -->

<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="addDoctor">
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
    <section class="u-border-5 u-border-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-clearfix u-custom-color-4 u-valign-bottom u-section-1" id="sec-c1b6">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-gradient u-section-2" id="sec-d12f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-default u-text-1">ADD NEW RECORD | ​Professor Details&nbsp;&nbsp;</h3>
       

<body>
@if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif
<form action = "/adddoctor" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	<table>
	<tr>
	<td>Doctor ID</td>
	<td><input type='text' name='id' /></td>
	<tr>
	<td>Name</td>
	<td><input type="text" name='name'/></td>
	</tr>
	<tr>
	<td>Email</td>
	<td><input type="email" name='email'/></td>
	</tr>

	<tr>
	<td colspan = '2'>
	<input type = 'submit' value = "submit"/>
	</td>
	</tr>
	</table>
</form>

    
<<<<<<< Updated upstream
    
=======
>>>>>>> Stashed changes
<footer class="u-align-center u-clearfix u-footer u-grey-80 u-valign-middle u-footer" id="sec-0322">
    <p class="u-small-text u-text u-text-variant u-text-1"> Copyright © MIU 2021. All rights reserved.</p>
  </footer>
  <section class="u-backlink u-clearfix u-grey-80">
  </section>
  </body>
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
</html>