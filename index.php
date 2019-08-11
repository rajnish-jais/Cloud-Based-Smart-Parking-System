<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <title>SmartParking</title>

    <link rel="icon" type="image/ico" href="img/fav.ico">

    <!-- CSS -->  
    <link rel="stylesheet" href="css/index.css" type="text/css" />
	<link rel="stylesheet" href="css/demo.css" type="text/css" />
	<link rel="stylesheet" href="css/footer.css" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<!-- Jquery -->
    <script src="js/jquery.min.js" type="text/javascript"></script>

    <!-- Google Maps -->
    <script type="text/javascript" src="js/google-map-api.js"></script>
</head>

<body class="">
   <div id="nav-wrapper" class="header-home">
    <div id="header_fullsize" class="header_fullsize">
      <div class="row header-row ninesixty_fixed relative">
        <span class="left header-left relative">
           <a href="/" class="left logo-link">
               <div class="logo logo-desktop" alt="SmartParking Logo"><h2>Company logo</h2></div>
           </a>  
		   <div class="header-input-container">
              <form action="/search" id="search-form">
                 <img class="header-search-icon" src="img/search.png"/>
                    <input id="searchLoc" name="q" value="" type="text" class="left header-input searchLoc input-destination" required="true" placeholder="Where are you going?" />
              </form>
            </div>
        </span>
            
        <span class="right header-right">
            <div class="user-actions" class="left">
                <ul class="right signin-links">
                   <li class="right signup-link pointer"><a class="uppercase nav-link header-log-in" href="/smartparking/registration.php">Sign Up</a></li>
                   <li class="right login-link pointer"><a class="uppercase nav-link header-log-in" href="/smartparking/login.php">Log In</a></li>
                </ul>
			</div>
            <div class="clear"></div>
        </span>           
        <div class="clear"></div>
       </div>
     </div>
	</div>
    
<div class="module-background city-hero">
    <div class="header-map-box">
        <img src="img/city1.jpg">
    </div>
    <div class="container-12 container z10">
        <div class="grid-12">
            <div class="header-form-box">
                <div class="search-header shadow-text">
                    <h1 class="search-header-main weight-200">Find & Pay For The Perfect Spot</h1>
                </div>
                <div class="layers">
                    <div id="daily" class="left pointer layer selected">City</div>
                    <div id="monthly" class="left pointer layer">Area</div>
                    <div id="street" class="left pointer layer">Street</div>
                </div>
                <div class="clear"></div>
                <form id="search_header" class="main-search-form row-fluid" action="https://www.google.co.in/?gws_rd=ssl">
                    <span class="btn-group destination">
                        <input id="input-destination" class="inputDestination innerShadow" name="q" placeholder="Where are you going?" value="" type="text" autocomplete="off" required="true">
                        <button type="submit" class="right btn btn-primary primary-search-btn">Search</button>
                        <div class="clear"></div>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>

<div class="container-12 container blue-info-section">
    <div class="grid-4 weight-200">
        <img src="svg/search.svg">
        <div class="how-section-header">Find</div>
        <div class="how-section-blurb">Find the cheapest, closest parking to your destination.</div>
    </div>
    <div class="grid-4 weight-200">
        <img src="svg/credit.svg">
        <div class="how-section-header">Pay</div>
        <div class="how-section-blurb">Get a guaranteed parking spot in advance with your credit card.</div>
    </div>
    <div class="grid-4 weight-200">
        <img src="svg/car_park.svg">
        <div class="how-section-header">Park</div>
        <div class="how-section-blurb">Head to your destination and you'll find a spot waiting for you.</div>
    </div>
</div>
<div class="clear"></div>
<!-- Popular Destinations -->
<div class="dest-wrapper">
    <div class="container-12 container">
        <div class="module-inner module-header border-radius">
            <div class="page-home parkingGuides">
               <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div class="clear homepage-divider"></div>

<div>
    <div class="container-12 container">
        <div class="grid-6">
            <img class="phones" src="img/phones.png">
        </div>

        <div class="grid-6">
            <div class="module-inner">
                <h1 class="light-blue-text app-attr-header weight-200">"<strong>Best</strong> parking app coming soon!"</h1>
                <ul class="app-attributes">
                    <li><span class="light-blue-text attr-bullet">&#8226;</span>Check daily and monthly rates for lots, plus rates for on-street meters (where available).</li>
                    <li><span class="light-blue-text attr-bullet">&#8226;</span>Set our parking timer to help you avoid overstaying, overpaying or getting a ticket.</li>
                    <li><span class="light-blue-text attr-bullet">&#8226;</span>See real-time info on available parking spots and meters (select markets only).</li>
                    <li><span class="light-blue-text attr-bullet">&#8226;</span>Get directions to the nearest lot entrance, not just the street address.</li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="clear homepage-divider"></div>
<?php include 'snippets/footer.php'?>
<script type="text/javascript" src="js/compressed.js"></script>
<script type="text/javascript" src="js/homepage.js"></script>

</body>
</html>
