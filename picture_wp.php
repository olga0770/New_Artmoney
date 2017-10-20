<!DOCTYPE html>
<html lang="en">


<?php
$pagename = 'picture_wp';
include('head.php');
?>


<body onload="myFunction()" style="margin:0;">


<?php
$pagename = 'picture_wp';
include('header.php');
?>




<ol class="breadcrumb" style="background-color: #f0f0f0; border-radius: 0 !important">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="collection_wp.php">Gallery</a></li>
    <li class="breadcrumb-item active">Artmoney</li>
</ol>




<div id="loader"></div>
<div class="container-fluid" style="display:none;" id="myDiv" class="animate-bottom">
<div class="row align-items-center justify-content-center masterpiece">

<!-- Here come Artmoney picture and all info about it -->

</div>
</div>





<?php
$pagename = 'picture_wp';
include('footer.php');
?>






<template class="picture_template">

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 art_picture">
<img class="data_art" src="" alt="Model">
</div>


<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 picture_description">

<h3 class="data_title"></h3>

<dl class="row">
<dt>Serial no: </dt>
<dd class="serial_number">Serial no: </dd>
</dl>

<h4 class="user_artist"></h4>

<dl class="row">
<dt>Owned by: </dt>
<dd class="owned_by"></dd><br>
</dl>

<dl class="row">
<dt>Style: </dt>
<dd class="style"></dd>
</dl>

<dl class="row">
<dt>Material: </dt>
<dd class="material"></dd>
</dl>

<br>

<p class="artmoney_descriprion"></p>

<dl class="row">
<dt>Price: </dt>
<dd class="price"></dd>
</dl>

<dl class="row">
<dt>Shipping fee: </dt>
<dd class="shipping_fee"></dd>
</dl>

<br>

<button type="button" class="btn btn-dark btn-lg btn-square" style="background-color: #000;">ADD TO CART</button>

<div class="black_line"></div>

<h4>By sharing this picture you support our artists!</h4>

<div class="social_media">
<div class="facebook"></div>
<div class="instagram"></div>
<div class="pinterest"></div>
</div><br>

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


    <script>
        let url = new URL(window.location.href);
        let searchParams = new URLSearchParams(url.search);
        let id = searchParams.get("id");
        let apiURL = "http://www.deleklubben.dk/artmoney/wordpress/wp-json/wp/v2/pictures/" + id;
        let post; //tom var

        getPost();

        async function getPost() {
            let result = await fetch(apiURL);
            post = await result.json();
            console.log(post);
            showPost();
        }


        function showPost() {
            let template = document.querySelector(".picture_template");
            let display = document.querySelector(".masterpiece");
            let clone = template.content.cloneNode(true);

clone.querySelector(".data_art").src = post.acf.artmoney_image;

clone.querySelector(".data_title").textContent = post.title.rendered;

clone.querySelector(".serial_number").textContent = post.acf.serial_number;

clone.querySelector(".user_artist").textContent = post.acf.artist.display_name;

clone.querySelector(".owned_by").textContent = post.acf.owned_by.display_name;

clone.querySelector(".style").textContent = post.acf.style;

clone.querySelector(".material").textContent = post.acf.material;

clone.querySelector(".artmoney_descriprion").textContent = post.acf.artmoney_descriprion;

clone.querySelector(".price").textContent = post.acf.price;

clone.querySelector(".shipping_fee").textContent = post.acf.shipping_fee;


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
