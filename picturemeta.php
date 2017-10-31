<?php
    $data =
    file_get_contents("http://www.deleklubben.dk/artmoney/wordpress/wp-json/wp/v2/pictures/$pictureid");
    $array = json_decode($data, true);


//echo "<pre>";
//print_r($array);
//echo "</pre>";



$url = "http://www.deleklubben.dk/artmoney/front-end/picture_wp.php?id=$pictureid";
$titel = $array['title']['rendered'];
$artist = "Artist: " . $array['acf']['artist']['display_name'];
$description = $array['acf']['artmoney_descriprion'];
$imageurl = $array['acf']['artmoney_image'];
?>



<meta property="og:url"           content="<?php echo $url; ?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php echo $titel; ?>" />
<meta property="og:title"         content="<?php echo $artist; ?>" />
<meta property="og:description"   content="<?php echo $description; ?>" />
<meta property="og:image"         content="<?php echo $imageurl; ?>" />

