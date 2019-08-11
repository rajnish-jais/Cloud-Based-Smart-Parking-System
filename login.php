<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Log In</title>

    <link rel="icon" type="image/ico" href="img/fav.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css" />
	<!-- Jquery -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
	<!-- Google Maps -->
    <script type="text/javascript" src="js/google-map-api.js"></script>
</head>

<body class="">

<div class="container-12 container">
    <div class="center grid-6 offset-3">
        <!-- Block BigLogo -->	
            <img class="smartparking-logo-lrg" src="img/logo.png"/>
        <!-- End BigLogo -->
    <div class="module-inner border-radius acct-create-box no-padding">
        <form id="new-account-form" method="post" action="." class="reg-form">
            <input type='hidden' name='csrfmiddlewaretoken' value='mVg39ehMu21sbddThzHNBHGilKaglfxcfp2FjzQLheUd68pI77YGfG949VAzIBed' />
            <input type="hidden" name="next" value="/" />
            <div class="create-box">
				<div class="reg-title">Sign In</div>
				<div class="reg-tagline">Take your parking plans with you.</div>
				<div class="reg-blurb create-header-blurb">
					Park Your car right through SmartParking
				</div>
				<div class="reg-fields create-fields">
					<input class="reg-field create-email" autocomplete="email" type="email" name="email" placeholder="Email address"/>
					<input id="id_password" class="reg-field reg-password" name="password" type="password" placeholder="Password"/>
				</div>
				<button type="submit" id="new-account-submit" class="reg-submit" value=""><strong>Sign In</strong></button>
			</div>
        </form>
    </div>
	</div>
</div>

</body>
</html>
