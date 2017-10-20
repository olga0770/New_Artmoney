<!DOCTYPE html>
<html lang="en">


<?php
$pagename = 'account_wp';
include('head.php');
?>



<body onload="myFunction()" style="margin:0;">



<?php
$pagename = 'account_wp';
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
<li class="breadcrumb-item"><a href="artists_wp.php">Artists</a></li>
<li class="breadcrumb-item active">Artist</li>
</ol>



<div id="loader"></div>
<div class="container-fluid" style="display:none;" id="myDiv" class="animate-bottom">
<div class="row justify-content-between">

<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 filter">
<div class="container-fluid">
<div class="row artist_account">

<!--Here comes artist's profile-->

</div>
</div>
</div>



<div class="col-xs-12 col-sm-6 col-md-7 collection">
<div class="container-fluid">
<div class="row gallery">

<!--Here comes atrist's pictures-->

</div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" style="border-radius: 0 !important">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#"style="border-radius: 0 !important">Next</a>
    </li>
  </ul>
</nav>
<br>

</div>

</div>
</div>





<?php
$pagename = 'account_wp';
include('footer.php');
?>








<!--Template artist's profile start-->
<template class="temp_account">

<div class="container-fluid">
<div class="row">


<div class="col-xs-6 col-sm-8 col-md-6">
<img class="data_image_account" src="" alt="Lars">

<div id="evaluation"></div>
</div>

<div class="col-sm-12 col-md-6 text_account">
<h4 class="data_artist_name"></h4>

<p class="data_artist_country"></p>
<p class="data_artist_telephone"></p>
<p class="data_artist_email"></p>

<a href="" class="btn btn-outline-dark btn-sm btn-square artist_website" role="button" aria-pressed="true">WEBSITE</a><br><br>

</div>
</div>
</div>

<br>

<div class="container-fluid">
<div class="row">

<div class="col-sm-12 description_account">

<p class="artist_about"></p>

</div>
</div>
</div>

</template>

<!--Template artist's profile finish-->



<!--Template artist's pictures start-->
<template id="collection_template">
<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 picture">
<a class="data_collectionlink" href="">
<img class="img-responsive data_art artimage" src="" alt="Artmoney">
<div class="overlay">
    <div class="text">
    <h4 class="data_arttitle">DATA_ARTTITLE</h4>
    <p class="data_artist">DATA_ARTIST</p>
    </div>
  </div>
</a>
</div>
</template>
<!--Template artist's pictures finish-->




    <!-- This particular jquery - for Evaluations-stars -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="star.js"></script>




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
//            clone.querySelector(".data_artist_email").href = post.acf.e-mail;
            clone.querySelector(".description_account").textContent = post.acf.about;
            clone.querySelector(".artist_website").href = post.url;

            display.appendChild(clone);
            }

</script>

<!--
<p class="data_artist_telephone"></p>
<p class="data_artist_e-mail"></p>
-->



<!--Artist's pictures-->
<script>

    let apiPicturesURL = "http://www.deleklubben.dk/artmoney/wordpress/wp-json/wp/v2/pictures/?author=" + id;
    let pictures = [];

    getPictures();
        // take JSON and put data in Pictures
        async function getPictures() {
            if (pictures.length < 1) {
                let result = await fetch(apiPicturesURL, {
                    method: 'get'
                });
                pictures = await result.json();
                showPictures();
            }
        }

        // show user's pictures
        function showPictures() {
            let templatepicture = document.querySelector("#collection_template");
            let displaypictures = document.querySelector(".gallery");
            pictures.forEach(function(pictures) {
                console.log(pictures);
                let clone = templatepicture.content.cloneNode(true);

            clone.querySelector(".data_art").src = pictures.acf.artmoney_image;
            clone.querySelector(".data_collectionlink").href = "picture_wp.php?id=" + pictures.id;
            clone.querySelector(".data_arttitle").textContent = pictures.title.rendered;
            clone.querySelector(".data_artist").textContent = pictures.acf.artist.display_name;

            displaypictures.appendChild(clone);
            });
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
