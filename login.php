<!DOCTYPE html>
<html lang="en">

<?php
$pagename = 'login';
include('head.php');
?>


<body>



<?php
$pagename = 'login';
include('header.php');
?>




<ol class="breadcrumb" style="background-color: #f0f0f0; border-radius: 0 !important">
  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
  <li class="breadcrumb-item active">Login</li>
</ol>






<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-4 picture_description">

    <h3 class="signup">LOG IN</h3>


    <form class="form" name="loginform" id="loginform" action="http://www.deleklubben.dk/artmoney/wordpress/wp-login.php" action="" method="post">

    <div class="form-group">
    <label for="Username" class="sr-only">UUSERNAME</label>
    <input type="text" class="input form-control" style="border-radius: 0 !important" id="brugernavn" placeholder="USERNAME OR E-MAIL" name="log" id="user_login" aria-describedby="login_error">
    </div>

    <div class="form-group">
    <label for="psw" class="sr-only">PASSWORD</label>
    <input type="password" class="input form-control" style="border-radius: 0 !important" id="psw" placeholder="PASSWORD" name="pwd" id="user_pass" aria-describedby="login_error">
    </div>


    <p>
    <label for="rememberme">
        <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me</label>
    </p>

<a href=""><p>Forgot password?</p></a>

    <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-dark btn-lg btn-square" style="background-color: #000; color: #fff !important" value="LOG IN" />
    <input type="hidden" name="redirect_to" value="http://www.deleklubben.dk/artmoney/wordpress/wp-admin/" />
    <input type="hidden" name="testcookie" value="1" />

    </form>

</div>
</div>
</div>




<?php
$pagename = 'login';
include('footer.php');
?>








    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
