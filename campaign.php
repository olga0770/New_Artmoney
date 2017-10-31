<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<meta property="fb:app_id"          content="xxxxx" />
<meta property="fb:admins"          content="xxx" />
<meta property="fb:app_id" content="{YOUR_APP_ID}" />

<meta property="og:url"           content="http://www.deleklubben.dk//artmoney/front-end/campaign.php" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Prison Art" />
<meta property="og:description"   content="Artmoney starts a social project that aiming to attract some public attention to prisoners' problems and find talented, artistically gifted people between them." />
<meta property="og:image"         content="http://www.deleklubben.dk//artmoney/front-end/picture/Campaign_Poster.jpg" />



<link rel="icon" href="picture/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<title>Artmoney</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
</head>




<body>

<!-- Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=1980947675520966';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook -->




 <?php
$pagename = 'campaign';
include('header.php');
?>





<ol class="breadcrumb" style="background-color: #f0f0f0; border-radius: 0 !important">
  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
  <li class="breadcrumb-item active">Campaign</li>
</ol>



<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-xs-12 col-sm-8 col-md-8 col-xl-6 picture_description">

<div class="container-fluid campaign_logo">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-lg-9">
                <img src="picture/campaign-logo-01.svg" alt="campaign">
        </div>
    </div>
</div>

<p>Artmoney starts a social project that aiming to attract some public attention to prisoners' problems and find talented, artistically gifted people between them. We think these people can create unusual and really interesting art. They can also sell their production after their registration on our website and be part of our creative community. And it's free for them! We are sure that their unusual point of view can also attract more collectors who are excited about prison art.</p>

<h3>WATCH OUR VIDEO AND JOIN ARTMONEY!</h3>

<div class="videocontainer">
<div class="hs-responsive-embed-youtube">
<iframe width="560" height="315" src="https://www.youtube.com/embed/Qe9mzNckpCI" frameborder="0" allowfullscreen></iframe>
</div>
</div><br>


<h4>Prison Art Campaign will start on the 15th of October and will last two months until Christmas. So maybe you will have a chance to find really outstanding presents!</h4>

<div class="black_line"></div>

<h4>By liking and sharing this video you support our artists!</h4>

<!-- Facebook button -->
<div class="fb-like" data-href="http://www.deleklubben.dk/artmoney/front-end/campaign.php" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
<!-- Facebook button -->


<!--
<div class="social_media">
<div class="facebook"></div>
<div class="instagram"></div>
<div class="pinterest"></div>
</div>
-->

<br><br><br>


<!-- Facebook comments -->
<div class="fb-comments" data-href="http://www.deleklubben.dk/artmoney/front-end/campaign.php" data-width="320" data-numposts="5"></div>
<!-- Facebook comments -->

</div>
</div>
</div><br>









 <?php
$pagename = 'campaign';
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
