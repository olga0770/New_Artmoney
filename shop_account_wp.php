<!DOCTYPE html>
<html lang="en">


<?php
$pagename = 'shop_account_wp';
include('head.php');
?>



<body onload="myFunction()" style="margin:0;">



<?php
$pagename = 'shop_account_wp';
include('header.php');
?>




<style>
.row{
margin-left: -15px;
margin-right: -15px;
padding-left: -15px;
padding-right: -15px;
}
.picture {
position: relative;
margin-top: 15px;
margin-bottom: 15px;
padding-top: 15px;
padding-bottom: 15px;
}
.artimage {
display: block;
height: auto;
}
.overlay {
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
height: 100%;
width: 100%;
opacity: 0;
transition: .5s ease;
background-color: #000;
}
.picture:hover .overlay {
opacity: 0.7;
}
.text {
color: white;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
}

.picture:hover img {
transform: scale(1.04);
}
.picture img {
transform: scale(1);
transition: .4s;
}
</style>




<ol class="breadcrumb" style="background-color: #f0f0f0; border-radius: 0 !important">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="shops_wp.php">Shops</a></li>
<li class="breadcrumb-item active">Shop</li>
</ol>



<div id="loader"></div>
<div class="container-fluid" style="display:none;" id="myDiv" class="animate-bottom">
<div class="row justify-content-center">

<div class="col-xs-12 col-sm-10 col-md-10 col-lg-8 filter">
<div class="container-fluid">
<div class="row artist_account">

<!--Here comes shop's profile-->

</div>
</div>
</div>





</div>
</div>





<?php
$pagename = 'shop_account_wp';
include('footer.php');
?>








<!--Template artist's profile start-->
<template class="temp_account">



<div class="col-xs-12 col-sm-12 col-md-6">


<div class="container-fluid">
<div class="row">


<div class="col-xs-6 col-sm-8 col-md-6">
<img class="data_image_account" src="" alt="Lars">
</div>

<div class="col-xs-6 col-sm-8 col-md-6 text_account">
<h4 class="data_artist_name"></h4>

<p class="data_artist_country"></p>
<p class="data_artist_telephone"></p>
<p class="data_artist_email"></p>

<a href="" class="btn btn-outline-dark btn-sm btn-square artist_website" role="button" aria-pressed="true">WEBSITE</a><br><br>

</div>
</div>
</div>


<div class="container-fluid">
<div class="row">
<div class="col-sm-12 description_account">
<p class="artist_about"></p>
</div>
</div>
</div>

</div>




<div class="col-xs-12 col-sm-12 col-md-6">

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<h4>SEND MESSAGE</h4>

<form class="form" action="sendmail.php">

    <div class="form-group">
    <label for="navn" class="sr-only">Your name</label>
    <input type="text" class="input form-control" style="border-radius: 0 !important" id="navn" required placeholder="Your name" name="navn" aria-describedby="login_error">
    </div>

    <div class="form-group">
    <label for="email" class="sr-only">Your email</label>
    <input type="email" class="input form-control" style="border-radius: 0 !important" id="email" required placeholder="Your email" name="email" aria-describedby="login_error">
    </div>

    <div class="form-group">
    <label for="emne" class="sr-only">Subject</label>
    <input type="text" class="input form-control" style="border-radius: 0 !important" id="emne" required placeholder="Subject" name="emne" aria-describedby="login_error">
    </div>

    <input class="kunsnermail" type="hidden" name="kunsnermail" value="">

    <div class="form-group">
    <label for="emne" class="sr-only">Subject</label>
    <textarea name="besked" placeholder="Message" class="input form-control" style="border-radius: 0 !important"></textarea>
    </div>

    <p class="submit"><input type="submit" class="btn btn-dark btn-lg btn-square" style="background-color: #000; color: #fff !important" value="SUBMIT" /></p>

</form>

</div>
</div>
</div>
</div>




</template>








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



<!--Artist's profile-->
<script>
        let url = new URL(window.location.href);
        let searchParams = new URLSearchParams(url.search);
        let id = searchParams.get("id");
        let apiURL = "http://www.deleklubben.dk/artmoney/wordpress/wp-json/wp/v2/users/" + id;
        let post; //tom var

        getPost();

        async function getPost() {
            let result = await fetch(apiURL);
            post = await result.json();
            console.log(post);
            showPost();
        }

   //*Show artist's profile*/


        function showPost() {
            let template = document.querySelector(".temp_account");
            let display = document.querySelector(".artist_account");
            let clone = template.content.cloneNode(true);

            clone.querySelector(".data_image_account").src = post.acf.profile_picture;
            clone.querySelector(".data_artist_name").textContent = post.name;
            clone.querySelector(".data_artist_country").textContent = post.acf.country;
            clone.querySelector(".data_artist_telephone").textContent = post.acf.telephone;
            clone.querySelector(".description_account").textContent = post.acf.about;
            clone.querySelector(".artist_website").href = post.url;
            clone.querySelector(".kunsnermail").value = post.acf.email;
            display.appendChild(clone);



            }

</script>








    <!--Preloader-->
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>



</body>
</html>
