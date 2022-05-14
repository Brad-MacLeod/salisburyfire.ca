<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=466935313364687";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="container">

 <!-- Menu & Title -->
 <?php
 //Identify Current Page
$cPage = "Home";
 // Include config file
 require_once "Config_Menu.php";
 require_once "Config_Title.php";
 ?>
<!-- Menu & Title -->
    
<div id="imgDep" style="position:absolute;left:38px;top:139px;width:775px;height:200px;z-index:5;">
<img class="image" src="images/slider/winter_775_200.jpg" alt="" title="">
<img class="image" src="images/slider/hall_775_200.jpg" style="display:none;" alt="" title="">
<img class="image" src="images/slider/ffit_775_200.jpg" style="display:none;" alt="" title="">
<!--<img class="image" src="images/slider/training_1119_775_200.jpg" style="display:none;" alt="" title="">-->
<img class="image" src="images/slider/fire_0420_775_200.jpg" style="display:none;" alt="" title="">
<!--<img class="image" src="images/slider/training_1219_775_200.jpg" style="display:none;" alt="" title="">-->
<img class="image" src="images/slider/fire_0421_775_200.jpg" style="display:none;" alt="" title="">
<img class="image" src="images/slider/truck_e21_775_200.jpg" style="display:none;" alt="" title="">
</div>
<!--Latest-->
<div id="Content_Title" style="position:absolute;left:0px;top:350px;width:500px;height:41px;z-index:6;text-align:left;">LATEST</div>
<!-- FB_Feed -->
<div id="Content_Body" style="position:absolute;left:0px;top:398px;width:500px;height:451px;z-index:8">
<div class="fb-page" data-href="https://www.facebook.com/SalisburyFireRescue" data-tabs="timeline" data-width="500" data-height="450" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/SalisburyFireRescue"><a href="https://www.facebook.com/SalisburyFireRescue">Salisbury Fire Rescue</a></blockquote></div></div></div>

<!-- Burning -->
<div style="position:absolute;left:511px;top:350px;width:330px;height:41px;z-index:12;" id="Content_Title">Burning</div>
<div style="position:absolute;left:511px;top:398px;width:330px;height:283px;z-index:7;" id="Content_Body"><br>
    <span id="Content_Sub_Title">INSIDE the Village</span>The village of Salisbury does have a burning bylaw, please visit this <a href="http://salisburynb.ca/VillageOfSalisbury/images/Alpha_Dev/PDF/by-laws/By_Law_48.pdf">link</a> referring to bylaw #48 before lighting any open fires inside the village limits.<br><br>
    <span id="Content_Sub_Title">OUTSIDE of the Village</span>Before lighting a fire outside the village limits you are responsible to ensure it is legal to do so on any given day, you may also require a permit. You must contact DNR@1-866-458-8080. More info is available on their <a href="https://www2.gnb.ca/content/gnb/en/news/public_alerts/forest_fire_watch.html">website</a>
</div>

<!-- Joining -->
<div style="position:absolute;left:511px;top:700px;width:337px;height:48px;z-index:10;" id="Content_Title">Want to Join</div>
<div style="position:absolute;left:511px;top:748px;width:337px;height:101px;z-index:10;" id="Content_Body"><br>
    Check out How in our <a href="./Contact_Us.php">Contact Us</a>
</div>
</div>
</body>
</html>