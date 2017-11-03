<?php
$pagename = 'collection_wp';
include('head.php');
?>


<body onload="myFunction()" style="margin:0;">


<?php
$pagename = 'collection_wp';
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
  <li class="breadcrumb-item active">Gallery</li>
</ol>




<div class="container-fluid">
<div class="row justify-content-between">
<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 col-xl-2 filter">

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




<h5>STYLE</h5>
<div class="black_line2"></div>
<fieldset class="input-field" data-filter-group="style">
        <input type="radio" name="style" value=".figurative"><label>Figurative</label><br>
        <input type="radio" name="style" value=".abstract"><label>Abstract</label><br>
        <input type="radio" name="style" value=".naive"><label>Naive</label><br>
        <input type="radio" name="style" value=".cartoon"><label>Cartoon</label><br>
        <input type="radio" name="style" value=".native"><label>Native</label><br>
        <input type="radio" name="style" value=".collage"><label>Collage</label>
    </fieldset><br><br>




<h5>ORIENTATION</h5>
<div class="black_line2"></div>
    <fieldset class="input-field" data-filter-group="orientation">
        <input type="radio" name="orientation" value=".landscape"><label>Landscape</label><br>
        <input type="radio" name="orientation" value=".portrait"><label>Portrait</label><br>
    </fieldset><br><br>


<h5>MATERIAL</h5>
<div class="black_line2"></div>
    <fieldset class="input-field" data-filter-group="material">
        <input type="radio" name="material" value=".paper"><label>Paper</label><br>
        <input type="radio" name="material" value=".canvas"><label>Canvas</label><br>
        <input type="radio" name="material" value=".wood"><label>Wood</label><br>
        <input type="radio" name="material" value=".glass"><label>Glass</label><br>
        <input type="radio" name="material" value=".ceramic"><label>Ceramic</label><br>
        <input type="radio" name="material" value=".plastic"><label>Plastic</label><br>
        <input type="radio" name="material" value=".metal"><label>Metal</label><br>
    </fieldset>

</div>














<div class="col-xs-12 col-sm-8 col-md-9 collection">
<div id="loader"></div>
<div class="container-fluid" style="display:none;" id="myDiv" class="animate-bottom">
 <div class="row gallery">

<!--Here comes all pictures-->

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
$pagename = 'collection_wp';
include('footer.php');
?>


<!--Template pictures start-->
<template id="collection_template">
<div class="mix col-xs-12 col-md-6 col-lg-4 col-xl-3 picture">
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
<!--Template pictures finish-->












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
        let apiURL = "http://www.deleklubben.dk/artmoney/wordpress/wp-json/wp/v2/pictures/?per_page=100";
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


            let template = document.querySelector("#collection_template");
            let display = document.querySelector(".gallery");
            posts.forEach(function(post) {
                console.log(post);
                let clone = template.content.cloneNode(true);


           // Mix it up
            clone.querySelector(".mix").classList.add(post.acf.style);
            clone.querySelector(".mix").classList.add(post.acf.orientation);
            clone.querySelector(".mix").classList.add(post.acf.country);

//            clone.querySelector(".mix").classList.add(post.acf.date_of_creation);

            if(post.acf.material.length > 0){
                for (i = 0; i < post.acf.material.length; i++) {
                    clone.querySelector(".mix").classList.add(post.acf.material[i]);
                }
            }




            clone.querySelector(".data_art").src = post.acf.artmoney_image;
            clone.querySelector(".data_collectionlink").href = "picture_wp.php?id=" + post.id;
            clone.querySelector(".data_arttitle").textContent = post.title.rendered;
            clone.querySelector(".data_artist").textContent = post.acf.artist.display_name;



            display.appendChild(clone);

            });



            mixitupfiltersortering();
            }

            function mixitupfiltersortering(){
                let containerEl = document.querySelector('.gallery');
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
