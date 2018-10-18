<!DOCTYPE html>
<!-- saved from url=(0020)?page= -->
<html lang="zxx">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
  <meta name="theme-color" content="#c94f2e">
  <meta name="author" content="RADIAN">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Keywords" content="Software house Indonesia, Software house indonesia, Software house Jakarta, Custom software indonesia, Mobile application development Indonesia, Mobile application Development Jakarta, Software quality and testing, Software quality and testing indonesia, Software quality and testing jakarta, Jasa testing software, Performance testing, Performance test, Functional test, Functional testing, optimization software">
  <meta property="og:keywords" content="Software house, Software house indonesia, Software house Jakarta, Custom software indonesia, Mobile application development Indonesia, Mobile application Development Jakarta, Software quality and testing, Software quality and testing indonesia, Software quality and testing jakarta, Jasa testing software, Performance testing, Performance test, Functional test, Functional testing, optimization software">
  <meta name="description" content="PT. RADIAN DATA TEKNOLOGI merupakan anak perusahaan dari PT.HEKSAEF PRAKARSA INDONESIA. ">
  <meta property="og:description" content="PT. RADIAN DATA TEKNOLOGI merupakan anak perusahaan dari PT.HEKSAEF PRAKARSA INDONESIA.">
  <meta property="og:title" content="PT. RADIAN DATA TEKNOLOGI">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
  <meta property="og:image" content="assets/img/software-house-jakarta.png">
 <!--  <meta name="twitter:card" content="summary">
  <meta name="twitter:description" content="Software house indonesia RADIAN IT Services, Custom Enterprise Software. Transparency in work!">
  <meta name="twitter:title" content="Software House Indonesia | Custom &amp; Enterprise Software Indonesia">
  <meta name="twitter:site" content="@software_house_indonesia">
  <meta name="twitter:image" content="assets/images/software-house-jakarta.png">
  <meta name="twitter:creator" content="@software_house_indonesia"> -->
  <link rel="shortcut icon" href="?page=image/favicon.ico" type="image/x-icon">
  <title>PT. RADIAN DATA TEKNOLOGI </title>
  <link href="assets/css/css-font.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/simple-line-icons.css">
  <link rel="canonical" href="?page=">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	
   
	<script src="assets/js/l.js" async=""></script>
	<script type="text/javascript" src="assets/js/sanitize.js"></script>
	<link href="https://client.relay.crisp.chat/" rel="dns-prefetch" crossorigin="">
	<link href="https://settings.crisp.chat/" rel="preconnect" crossorigin="">
	<link href="https://client.crisp.chat/" rel="preconnect" crossorigin="">
	<link href="https://image.crisp.chat/" rel="preconnect" crossorigin="">
	<script src="assets/js/client.js" type="text/javascript" async=""></script>
	<link href="assets/css/client_default.css" type="text/css" rel="stylesheet">

  <style type="text/css">
    @font-face {
font-family: "Font Digital";
src: url('CopperplateGothicBold.ttf');
}
.copperplate {
font-family: "Font Copperplate";
}
  </style>
</head>

<body class="ui-transparent-nav copperplate">
	 
	
	<!-- Navbar Fixed + Default -->
    <nav class="navbar navbar-fixed-top navbar-light bg-white transparent">
		<div class="container">
		
			<!-- Navbar Logo -->
			<a class="ui-variable-logo navbar-brand" href="index.php" title="RADIAN" >
				<!-- Default Logo -->
				<img class="logo-default" src="assets/images/logo.png" alt="RADIAN" data-uhd="">
				<!-- Transparent Logo -->
				<img class="logo-transparent" src="assets/images/logo-white.png" alt="RADIAN" data-uhd="">
			</a><div class="ui-navigation navbar-right" style="">
				<ul class="nav navbar-nav">
        <!-- Nav Item -->
          <li style="opacity: 1;">
            <a href="?page=about">Tentang Kami</a>
          </li>
          <!-- Nav Item -->
					<!-- Nav Item -->
					<li class="dropdown active" style="opacity: 1;">
						<a href="?page=#" class="dropdown-toggle" data-toggle="dropdown">
							Layanan Kami
						</a>
						<ul class="dropdown-menu">
              <li class="dropdown-item" style="opacity: 1;">
                <a href="?page=it_solution">IT Solution</a>
              </li>
              <li class="dropdown-item" style="opacity: 1;">
                <a href="?page=fiber_optic_ftth">Fiber Optic FTTH</a>
              </li>
              <li class="dropdown-item" style="opacity: 1;">
                <a href="?page=software_development">Software Development</a>
              </li>
            </ul>
					<!-- Nav Item -->
					<li style="opacity: 1;">
						<a href="?page=portofolio">Portofolio</a>
					</li>
					<!-- Nav Item -->
          <li style="opacity: 1;">
            <a href="?page=partnership">Partnership</a>
          </li>
          <!-- Nav Item -->
					<!-- Nav Item -->
          <li style="opacity: 1;">
            <a href="?page=struktur">Struktur</a>
          </li>
          <!-- Nav Item -->
          <!-- Nav Item -->
          <li style="opacity: 1;">
            <a href="?page=our_produk">Produk</a>
          </li>
          <!-- Nav Item -->
				</ul><!--.navbar-nav -->
			</div><!-- .navbar-brand -->

			<!-- Navbar Navigation -->
			<!--.ui-navigation -->

			<!-- Navbar Button -->
      <a href="?page=contact" class="btn btn-sm ui-gradient-peach pull-right">Hubungi Kami</a>

			<!-- Navbar Toggle -->
			<a href="?page=#" class="ui-mobile-nav-toggle pull-right">
            <div>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            </div></a>

		</div><!-- .container -->
	</nav> <!-- nav -->
	
	<!-- Main Wrapper -->
   
    	<?php if(!isset($_GET['page'])) $_GET['page'] = 0;?>
        <?php
            if ($_GET['page']) {
                require_once 'pages/'.$_GET['page'] . '.php';
            } else {
                require_once 'pages/home.php';
            }
        ?>
   		
       <!-- .main -->
        
     <script type="text/javascript">
        window.$crisp=[];window.CRISP_WEBSITE_ID="3e3dcdc3-d4bd-4ad4-b031-09d84f78a2f4";
        (function(){d=document;s=d.createElement("script");
        s.src="https://client.crisp.chat/l.js";
        s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
      </script>
     <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="assets/js/jquery.sliderPro.min.js"></script>
     <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
     <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
     <script type="text/javascript" src="assets/js/bootstrap.js"></script>
     <script type="text/javascript" src="assets/js/new.js"></script>

    <div class="crisp-client">
        <div class="crisp-1u69i93">
            <div class="crisp-1xnk5y2">
                <style type="text/css">
                    .crisp-client .crisp-6k5puw .crisp-5ww6wc,
                    .crisp-client .crisp-6k5puw .crisp-1as00um:hover {
                      color: #FFFFFF !important;
                      -webkit-text-fill-color: #FFFFFF !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-knmleg,
                    .crisp-client .crisp-6k5puw .crisp-juw9ke:hover {
                      color: #752B00 !important;
                      -webkit-text-fill-color: #752B00 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-az024n,
                    .crisp-client .crisp-6k5puw .crisp-3qaet4:hover {
                      color: #C24702 !important;
                      -webkit-text-fill-color: #C24702 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1qx5tzh,
                    .crisp-client .crisp-6k5puw .crisp-1i3ig5q:hover {
                      color: #E45300 !important;
                      -webkit-text-fill-color: #E45300 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-6t8xxc {
                      background-color: #FFFFFF !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1vh5pjs {
                      background-color: #752B00 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-ukuhcj {
                      background-color: #CD4A00 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1v1s92e,
                    .crisp-client .crisp-6k5puw .crisp-5e74az:before,
                    .crisp-client .crisp-6k5puw .crisp-5e74az:after {
                      background-color: #E45300 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-ks9ngr {
                      background-color: #FDF5F5 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-15fe8br,
                    .crisp-client .crisp-6k5puw .crisp-18xaac6:hover {
                      background-color: #F9F9F9 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1cb25cy {
                      background-image: linear-gradient(125deg, #E45300 -10%, #752B00 100%) !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1agj70f,
                    .crisp-client .crisp-6k5puw .crisp-96vcni:hover {
                      border-color: #FFFFFF !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-e612oy {
                      border-color: rgba(117, 43, 0, 0.175) !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-aqj0bi,
                    .crisp-client .crisp-6k5puw .crisp-x92dwq:hover,
                    .crisp-client .crisp-6k5puw .crisp-h8bsv3:before,
                    .crisp-client .crisp-6k5puw .crisp-h8bsv3:after {
                      border-color: #E45300 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1hcgg99 {
                      border-color: rgba(228, 83, 0, 0.15) !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-11xxyq7 {
                      border-top-color: #E45300 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1ypj3zb,
                    .crisp-client .crisp-6k5puw .crisp-yst6jv:hover {
                      border-color: #FDF5F5 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-nrzfu0:placeholder {
                      color: #DA7859 !important;
                      -webkit-text-fill-color: #DA7859 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-nrzfu0:-moz-placeholder {
                      color: #DA7859 !important;
                      -webkit-text-fill-color: #DA7859 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-nrzfu0::-moz-placeholder {
                      color: #DA7859 !important;
                      -webkit-text-fill-color: #DA7859 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-nrzfu0:-ms-input-placeholder {
                      color: #DA7859 !important;
                      -webkit-text-fill-color: #DA7859 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-nrzfu0::-webkit-input-placeholder {
                      color: #DA7859 !important;
                      -webkit-text-fill-color: #DA7859 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-pzfoa7:placeholder {
                      color: #DA7859 !important;
                      -webkit-text-fill-color: #DA7859 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-pzfoa7:-moz-placeholder {
                      color: #DA7859 !important;
                      -webkit-text-fill-color: #DA7859 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-pzfoa7::-moz-placeholder {
                      color: #DA7859 !important;
                      -webkit-text-fill-color: #DA7859 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-pzfoa7:-ms-input-placeholder {
                      color: #DA7859 !important;
                      -webkit-text-fill-color: #DA7859 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-pzfoa7::-webkit-input-placeholder {
                      color: #DA7859 !important;
                      -webkit-text-fill-color: #DA7859 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1j15m7o,
                    .crisp-client .crisp-6k5puw .crisp-977s5e:hover,
                    .crisp-client .crisp-6k5puw .crisp-1j15m7o:hover,
                    .crisp-client .crisp-6k5puw .crisp-977s5e:active,
                    .crisp-client .crisp-6k5puw .crisp-1j15m7o:active,
                    .crisp-client .crisp-6k5puw .crisp-1gn4wbn:hover .crisp-jdiqpe,
                    .crisp-client .crisp-6k5puw .crisp-1gn4wbn .crisp-jdiqpe:active {
                      background: #752B00 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1juh5v5,
                    .crisp-client .crisp-6k5puw .crisp-mrxwob:hover {
                      background: #C24702 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1juh5v5:hover,
                    .crisp-client .crisp-6k5puw .crisp-mrxwob:active {
                      background: #963700 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1juh5v5:active {
                      background: #752B00 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1fue6b:hover .crisp-m9wlbr {
                      background: #C24702 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1fue6b .crisp-m9wlbr:active {
                      background: #963700 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1kuyudk,
                    .crisp-client .crisp-6k5puw .crisp-7opw7d[data-active="true"] {
                      background: #E45300 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1kuyudk:hover {
                      background: #CD4A00 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-1kuyudk:active {
                      background: #C24702 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-qm3u92::-moz-selection,
                    .crisp-client .crisp-6k5puw .crisp-qm3u92 *::-moz-selection {
                      background-color: #FFE8E0 !important;
                    }

                    .crisp-client .crisp-6k5puw .crisp-qm3u92::selection,
                    .crisp-client .crisp-6k5puw .crisp-qm3u92 *::selection {
                      background-color: #FFE8E0 !important;
                    }
                </style>
            </div>
        </div>
        <div id="crisp-chatbox" lang="en" dir="ltr" translate="no" data-blocked="false" data-lock-maximized="false" data-last-operator-face="false" data-availability-tooltip="false" data-hide-vacation="false" data-hide-on-away="false" data-hide-on-mobile="false" data-position-reverse="false" data-full-view="false" data-small-view="true" data-large-view="false" data-availability="away" data-is-activity-ongoing="false" data-was-availability-online="false" data-has-local-messages="false" class="crisp-6k5puw">
            <div class="crisp-4n0wrv crisp-qm3u92">
                <a data-maximized="false" data-is-failure="false" href="?page=#!" class="crisp-113f7m5" data-cshid="9c6094fb-abb8-0f0a-d381-0973d17fb758">
                    <span class="crisp-130va1r">
                        <span data-id="general_entice" data-with-helpdesk="false" data-is-concealed="false" class="crisp-1juw0zy" style="display: block !important;"><span class="crisp-1l0aq6o">
                            <span class="crisp-vmrucd crisp-1hzjrty">
                                <span class="crisp-y77lo3">
                                    <span class="crisp-8hntc4">
                                        <span class="crisp-18uhjes crisp-1iepoom"></span>
                                        <span data-has-avatar="true" class="crisp-11344e2">
                                            <span class="crisp-1mb0xew">
                                                <span class="crisp-w67exq crisp-561mbi">Questions? Chat with us!</span>
                                                <span data-id="online" class="crisp-ih1cg5 crisp-1hzjrty">Support is online.</span>
                                                <span data-id="away" class="crisp-ih1cg5 crisp-1hzjrty">Support is away.</span>
                                            </span>
                                            <span class="crisp-141b9ch">
                                                <span class="crisp-1902qrg crisp-1aboypu">
                                                    <span style="background-image: url(&#39;https://image.crisp.chat/process/thumbnail/?url=https%3A%2F%2Fstorage.crisp.chat%2Fusers%2Favatar%2Foperator%2F5eef9c5f-1f16-4935-884a-bfb37bacf985%2F75d12983-ce8d-43a7-96cf-738fba591cc9.jpg&amp;width=240&amp;height=240&amp;1&#39;) !important;" class="crisp-16vopsn crisp-55dkw"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                <span data-when="online" class="crisp-1e1jb7c">
                                    <span class="crisp-1c2a035 crisp-18xaac6">
                                        <span class="crisp-15waq4c">
                                            <span class="crisp-8dp6we crisp-1qx5tzh crisp-561mbi">Chat with RADIAN Team</span>
                                        </span>
                                    </span>
                                </span>
                                <span data-when="away" class="crisp-1e1jb7c">
                                    <span class="crisp-1c2a035 crisp-18xaac6">
                                        <span class="crisp-15waq4c">
                                            <span class="crisp-8dp6we crisp-1qx5tzh crisp-561mbi">Chat with RADIAN Team</span>
                                        </span>
                                    </span>
                                </span>
                            </span>
                            </span>
                        </span>
                    </span>
                    <span class="crisp-k30d4h crisp-1v1s92e">
                        <span data-id="chat_closed" class="crisp-16lwunj">
                            <span class="crisp-h9wdrn">
                                <span class="crisp-ujyijt crisp-v0enpg"></span>
                            </span>
                            <span data-is-ongoing="false" class="crisp-n2psp0"></span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</body>
</html>