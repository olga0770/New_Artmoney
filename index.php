<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="picture/favicon.png">


<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<style>
.data_text{color: #fff;}</style>

<!--    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">-->


<title>Artmoney</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<link href="style.css" rel="stylesheet">

</head>
<body>


<a href="#address"><div class="logo"></div></a>

<div class="shopping"></div>







<nav class="navbar navbar-expand-lg navbar-dark index" style="background-color: #000;">
<!--  <a class="navbar-brand" href="#">Navbar</a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #780a23; border-radius: 0 !important">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">


    <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="collection_wp.php">GALLERY </a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="artists_wp.php">ARTISTS </a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="shops_wp.php">SHOPS </a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="campaign.php">CAMPAIGN! </a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="news.php">NEWS </a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT </a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="faq.php">FAQ </a>
      </li>

</ul>

<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" style="border-radius: 0 !important" placeholder="SEARCH" aria-label="Search">
    </form>

    <a href="login.php" class="btn btn-outline-light btn-square" role="button" aria-pressed="true" style="background-color: #000;">LOG IN</a>

    <a href="signup.php" class="btn btn-outline-light btn-square" role="button" aria-pressed="true" style="background-color: #780a23;">JOIN US</a>


</div>
</nav>





<div id="overlay">
<div id="title"><p>Alternative currency made of original art</p>
    <div class="container-fluid">
        <div class="row justify-content-end moto">
            <div class="col-xs-8 col-sm-8 col-mg-8 col-lg-8 needcash">
                <img src="picture/Need_Cash-01.svg" alt="needcash">

                <div class="container-fluid campaign">
                <div class="row justify-content-end">
                <div class="col-xs-12 col-sm-10 col-mg-8 col-lg-8 col-xl-5">

                    <a href="campaign.php"><img src="picture/campaign-01.svg" alt="campaign"></a>

                </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
    <video class="visible-desktop" id="hero-vid" autoplay loop>
        <source type="video/mp4" src="video/Brush.mp4">
    </video>
    <img id="hero-pic" class="hidden-desktop" src="video/video_poster.jpg" alt="poster">
</div>







<div id="content">


<div class="container-fluid">
<div class="row justify-content-center">

<div class="col-xs-8 col-sm-4 col-md-4 col-lg-3 icon">
<a href="signup.php"><img src="picture/Icon_Sell_Artmoney-01.svg" alt="icon">
<h5>SELL ARTMONEY</h5></a>
</div>

<div class="col-xs-8 col-sm-4 col-md-4 col-lg-3 icon">
<a href="collection_wp.php"><img src="picture/Icon_Buy_Artmoney-01.svg" alt="icon">
<h5>BUY ARTMONEY</h5></a>
</div>

<div class="col-xs-8 col-sm-4 col-md-4 col-lg-3 icon">
<a href="partners.php"><img src="picture/Icon_Use_Artmoney-01.svg" alt="icon">
<h5>USE ARTMONEY</h5></a>
</div>

</div>
</div>



<h3>WHAT IS THE IDEA OF ARTMONEY? WATCH VIDEO!</h3><br>







<!--Call to Action Video Started -->

<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="videocontainer">
<video width="100%" height="100%" poster="video/video_poster_4.jpg" controls id="radissonsvideo">
<source src="video/What_is_Artmoney.mp4">
Your borwser does not support the video tag.
</video>


<div id="endcredits">
<div id="endcreditsbutton">
<a href="signup.php" class="btn btn-outline-light btn-lg btn-square">JOIN ARTMONEY NOW!</a><br>
<p class="font_small">Be part of our community, find friends and like-minded people!</p>
</div>

</div>
</div>
</div>
</div>
</div>

<!--Call to Action Video Finished -->






</div>









<?php
$pagename = 'index';
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


<!-- Plugin Parallax -->
<script>
$(document).ready(function () {
    $(window).on('load scroll', function () {
        var scrolled = $(this).scrollTop();
        $('#title').css({
            'transform': 'translate3d(0, ' + -(scrolled * 0.2) + 'px, 0)', // parallax (20% scroll rate)
            'opacity': 1 - scrolled / 400 // fade out at 400px from top
        });
    });
});
</script>




<!-- Plugin JavaScript Video Call to action -->
    <script src="js/popcorn-complete.js"></script>

    <script>
    var videoid = document.querySelector("#radissonsvideo");
    var popcornvideo = Popcorn(videoid);
    // vis CTA når video er slut

    videoid.addEventListener("ended", function(e){
    $("#endcredits").show();
    })

    popcornvideo.footnote({
    start:2,
    end:6,
    text:"Popcorn video!",
    target: "annotation"
    });
    //    popcornvideo.play();
    </script>










</body>
</html>
