<!DOCTYPE html>
<html lang="en">



<?php
$pagename = 'artists_wp';
include('head.php');
?>


<body onload="myFunction()" style="margin:0;">


<?php
$pagename = 'artists_wp';
include('header.php');
?>



<ol class="breadcrumb" style="background-color: #f0f0f0; border-radius: 0 !important">
  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
  <li class="breadcrumb-item active">Artists</li>
</ol>





<div class="container-fluid">
<div class="row">

<div class="col-xs-12 col-sm-4 col-md-3 filter">

<h4>FILTERS</h4>

<!--??????????????<button class="button_filter" type="button" data-sort="date_of_creation:asc">NEWEST</button><br>-->

<h5>COUNTRY</h5>
<div class="black_line2"></div>


<select  data-filter-group="country">
    <option value="">Select here</option>
    <option value=".Denmark">Denmark</option>
    <option value=".Norway">Norway</option>
    <option value=".Finland">Finland</option>
    <option value=".Sweden">Sweden</option>
</select><br><br>

</div>

<div class="col-xs-12 col-sm-8 col-md-9 partner_list">
<div id="loader"></div>
<div class="container-fluid" style="display:none;" id="myDiv" class="animate-bottom">
<div class="row artists_info">

<!--Here comes all artists portraits and info-->





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
$pagename = 'artists_wp';
include('footer.php');
?>





<!--template artists start-->
<template class="artists_template">
<div class="col-xs-12 col-md-10 col-lg-6 col-xl-4 mix">

<a class="data_artistlink" href="">
<div class="container-fluid">
<div class="row align-items-center">


<div class="col-xs-1">
<img class="img-responsive data_art profile_artists_picture" src="" alt="artist">
</div>

<div class="col-xs-11 artists_about">
<h4 class="data_artists_name"></h4>
<p class="data_artists_country"></p>
</div>

</div>
</div>
</a>

</div>
</template>
<!--template artists finish-->




<!--    <script src="artists.js"></script>-->

    <!-- Other jquery -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script src="js/mixitup.min.js"></script>
    <script src="js/mixitup-multifilter.min.js"></script>




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
        let apiURL = "http://www.deleklubben.dk/artmoney/wordpress/wp-json/wp/v2/users?filter[role]=administrator/";
        let posts = []; //tom liste

        getPosts();
        // hent JSON og put data ind i posts
        async function getPosts() {
            if (posts.length < 1) {
                let result = await fetch(apiURL, {
                    method: 'get'
                });
                posts = await result.json();
                console.log(posts);
                showPosts();
            }
        }

        // fordel de forskellige typer content til templaten
        function showPosts() {
            let template = document.querySelector(".artists_template");
            let display = document.querySelector(".artists_info");
            posts.forEach(function(post) {
                console.log(post);
                let clone = template.content.cloneNode(true);




      // Mix it up
        clone.querySelector(".mix").classList.add(post.acf.country);



        clone.querySelector(".data_artists_name").textContent = post.name;
        clone.querySelector(".data_artists_country").textContent = post.acf.country;
        clone.querySelector(".profile_artists_picture").src = post.acf.profile_picture;
        clone.querySelector(".data_artistlink").href = "account_wp.php?id=" + post.id;


        display.appendChild(clone);
        });


        mixitupfiltersortering();
            }

            function mixitupfiltersortering(){
                let containerEl = document.querySelector('.artists_info');
                let mixer = mixitup(containerEl, {
                multifilter: {
                    enable: true, //enable the multifilter extension for the mixer
                    logicBetweenGroups: 'and'
                    }
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
