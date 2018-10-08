


<!DOCTYPE html>
<html lang="en">
<head>
    <title>contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('/')}}frontstyle/contact/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontstyle/contact/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontstyle/contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontstyle/contact/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontstyle/contact/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontstyle/contact/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontstyle/contact/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontstyle/contact/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontstyle/contact/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontstyle/contact/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontstyle/contact/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>

<div class="container-contact100">


    <button class="contact100-btn-show">
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
    </button>

    <div class="wrap-contact100">
        <button class="contact100-btn-hide">
            <i class="fa fa-close" aria-hidden="true"></i>
        </button>



        <form action="{{route('submitcontactmessage')}}" method="post" class="contact100-form validate-form">

            @csrf
            <span  class="contact100-form-title" style="font-family: cursive;">
					Contact Us
				</span>

            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                <span style="font-family: cursive" class="label-input100">Your Name</span>
                <input style="font-family: cursive" class="input100" type="text" name="name" placeholder="">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span style="font-family: cursive" class="label-input100">Email</span>
                <input style="font-family: cursive" class="input100" type="text" name="email" placeholder="">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Message is required">
                <span style="font-family: cursive" class="label-input100">Message</span>
                <textarea style="font-family: cursive" class="input100" name="message" placeholder="Your message here...">Your message here...</textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                </button>
            </div>
        </form>

        <span style="font-family: cursive;background: #581c8b" class="contact100-more">
				For any question contact our 24/7 call center: <span class="contact100-more-highlight">+88(0)1521254239</span>
			</span>
    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('/')}}frontstyle/contact/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}frontstyle/contact/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}frontstyle/contact/vendor/bootstrap/js/popper.js"></script>
<script src="{{asset('/')}}frontstyle/contact/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}frontstyle/contact/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}frontstyle/contact/vendor/daterangepicker/moment.min.js"></script>
<script src="{{asset('/')}}frontstyle/contact/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}frontstyle/contact/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="{{asset('/')}}frontstyle/contact/js/map-custom.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}frontstyle/contact/js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
