<!doctype html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Fire Fighters</title>
  </head>
  
  <?php
//Identify Current Page
$cPage = "FireFighters";

// Include config file
require_once "config.php";

function getFireFighters($vRank){    
    // Prepare a select statement
    $sql = "SELECT FF_Name,Rank,FF_Title,img,Joined FROM tbl_ff where Active =1 and Rank ='$vRank' ORDER BY sub_order, FF_Name";
    
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    
    //echo "<td>".$sql."</td></tr><tr>";

    $result = $link->query($sql);
    
    $i = 0;
    
    //Set the glow        
    $Color = "Yellow";
    if($vRank == "Chief"){
        $Color = "Black";
    }elseif($vRank == "Captain" or $vRank == "Lieutenant"){
        $Color = "Red";
    }
    //echo $Color."-".$vRank."<BR>";

    while($row = $result->fetch_array())
    {
        if($i>0 and ($i % 5) == 0){//If not on the first row and after every 5 person
            echo "</TR><TR>";//Start a new row
        }
        echo "<td class='caption'>";
        //Add Image
        echo "<img alt='".$row['FF_Name']."' id='Photo".$Color."_img' src='images/FF/".$row['img']."'><br>";
        echo "<span class='title'>".$row['FF_Title']."</span><BR>";
        echo "<span class='ff'>".$row['FF_Name']."</span>";
        echo "</td>";
        $i++; //Another Satisfied Customer :)
        
    }
    /* free result set */
    $result->close();
    // Close connection
    mysqli_close($link);
}
?>
  
  <body>
    <div id="container">  
 <!-- Menu & Title -->
 <?php
 // Include config file
 require_once "Config_Menu.php";
 require_once "Config_Title.php";
 ?>
<!-- Menu & Title -->
<link href="Fire_Fighters.css" rel="stylesheet">
<div style="position:absolute;left:30px;top:161px;width:818px;height:150px;z-index:5;">
<table id="Photo">
   <tr><?PHP getFireFighters("Chief"); ?></tr>
   <tr><?PHP getFireFighters("Captain"); ?></tr>
   <tr><?PHP getFireFighters("Lieutenant"); ?></tr>
   <tr><?PHP getFireFighters("Fire Fighter"); ?></tr>
</table>
</div>

</div>
    </div><!-- comment -->
</body>
</html>