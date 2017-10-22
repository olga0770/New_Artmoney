<!DOCTYPE html>
<html lang="en">

<?php
$pagename = 'signup';
include('head.php');
?>

<body>



<?php
$pagename = 'signup';
include('header.php');
?>



<ol class="breadcrumb" style="background-color: #f0f0f0; border-radius: 0 !important">
  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
  <li class="breadcrumb-item active">Join Us</li>
</ol>







<div class="container-fluid">
<div class="row justify-content-center">

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-4 picture_description">

<h3 class="signup">JOIN US!</h3>




<form class="form" name="registerform" id="registerform" action="http://www.deleklubben.dk/artmoney/wordpress/wp-login.php?action=register" action="" method="post" novalidate="novalidate">

    <div class="form-group">
    <label for="user_login" class="sr-only">Username</label>
    <input type="text" class="input form-control" style="border-radius: 0 !important" id="user_login" placeholder="USERNAME" name="user_login" aria-describedby="login_error">
    </div>

    <div class="form-group">
    <label for="user_email" class="sr-only">EMAIL</label>
    <input type="text" class="input form-control" style="border-radius: 0 !important" id="user_email" placeholder="E-MAIL" name="user_email" id="user_email" aria-describedby="login_error">
    </div>

    <p id="reg_passmail">Registration confirmation will be emailed to you.</p>

	<input type="hidden" name="redirect_to" value="" />

    <p class="submit"><input type="submit" name="wp-submit" id="wp-submit" class="btn btn-dark btn-lg btn-square" style="background-color: #000; color: #fff !important" value="CREATE ACCOUNT" /></p>

</form>








</div>
</div>
</div>














<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-xs-10 col-sm-8">

<div class="black_line2"></div>

</div>
</div>
</div>




<!-- Artists Shops Collectors Picture start -->

<h3 class="why_signup">Why do people join Artmoney?</h3>

<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-xs-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
<div id="icon"></div>
</div>
</div>
</div>


<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-xs-12 col-md-10 col-lg-8">

<div class="info_box">
<div class="table person_data">

<div class="text_signup">
<p class="data_text"></p>
</div>
</div>
</div>

</div>
</div>
</div>
<!-- Artists Shops Collectors Picture Finish -->





<?php
$pagename = 'signup';
include('footer.php');
?>







    <!-- Artists Partners Collectors Scripts -->
      <!-- Other jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="signup.js"></script>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>




    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script>
        (function() {
            'use strict'

            if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement('style')
                msViewportStyle.appendChild(
                    document.createTextNode(
                        '@-ms-viewport{width:auto!important}'
                    )
                )
                document.head.appendChild(msViewportStyle)
            }

        }())
    </script>



</body>
</html>
