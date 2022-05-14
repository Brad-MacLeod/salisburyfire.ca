<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>50/50</title>
  </head>
  <?php
//Identify Current Page
$cPage = "50/50";
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = "XYZ";
$draw = $pot = $ticket= 0;
$draw_dte = date("Y/m/d");
$winner = false;

// Show Winners
    
// Prepare a select statement
$sql = "SELECT name, draw, pot, winner, draw_dte, ticket FROM tbl_5050 order by draw DESC LIMIT 6";

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$result = $link->query($sql);

while($row = $result->fetch_array())
{
$rows[] = $row;
}

/* free result set */
$result->close();

// Close connection
mysqli_close($link);

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

<!-- ABOUT 5050 -->
<!-- 5050 -->
    <div id="Content_Title" style="position: absolute; left: 0px; top: 160px; width: 625px; height: 40px; z-index: 6; text-align: left;">
      Salisbury Fire and Rescue 50/50</div>
<!-- 5050 Content -->
    <div style="position: absolute; left: 0px; top: 200px; width: 625px; height: 614px; z-index: 7; text-align: left;" id="Content_Body"> 
        <span id="Content_Sub_Title">What is the "Salisbury Fire and Rescue 50/50"?</span>
        It is a weekly 50/50 draw where registered participants pay $2 each week
        for a chance to win the pot.&nbsp; <br><br>
      <span id="Content_Sub_Title">How Does It Work?</span>
      Participants must register the FIRST TIME by providing their name and phone
        number.&nbsp; Each week the participant must purchase at least ONE
        ticket in order to have a chance to win.&nbsp; On draw day we determine
        if the participant associated with the winning ticket participated that
        week by purchasing a ticket.&nbsp; If yes, they will win the pot.&nbsp;
        If no, the pot is add to the next week's draw.<br><br>
      <span id="Content_Sub_Title">When is the draw?</span>
        Draw takes place Wednesday evening at the Salisbury Fire Hall.  
        Winners will be contacted by the phone number provided and posted on the Salisbury Fire Facebook Page. <br><br>
      <span id="Content_Sub_Title">Where to play?</span>
      Guardian - Salisbury Pharmacy<br>
      McTavy's General Store<br>
      Shell / Sobeys Express<br><br>
      <span id="Content_Sub_Title">NEW 50/50 FAQ</span>
      <span id="Content_Sub_Question">When will the new draw begin?</span>April 29th our systems will be down while we swap out hardware at our retailers.  Once provincial auditors review out system we will be open for business.  Keep an eye on our <a href="https://www.facebook.com/SalisburyFireRescue/">Facebook page</a> for Updates.<br><br>
      <span id="Content_Sub_Question">Will I need to sign up again?</span>No, you information from the current draw will move to the new system.<br><br>
      <span id="Content_Sub_Question">What if I bought advanced tickets?</span>Don't worry, your future tickets will be automatically moved to the new system.
      
      </div>

    <!-- Winners -->
    <!-- Header -->
    
    <div id="Content_Title" style="position: absolute; left: 640px; top: 160px; width: 220px; height: 40px; text-align: left;">
      Results
    </div>
    <!-- Header -->
    <!-- Body -->
    <div id="Content_Body" style="position: absolute; left: 640px; top: 200px; width: 220px; height: 614px; z-index: 12;">
        <?PHP foreach($rows as $row){?> <b>Event</b>
        <?PHP echo $row['draw']; ?> (<?PHP echo date('M d Y', strtotime($row['draw_dte'])); ?>)<br>
        <?PHP if($row['winner']){ ?><span sytle="color:#22B14C;"> Winner - </span>$<?php echo number_format(round($row['pot'] / 2)); ?> <br>
        <?PHP }else{ ?> <span sytle="color:#B22222;">Non Winner</span> <br>
        <?php } ?>
        <?Php echo $row['ticket']; ?> -
        <?php echo $row['name']; ?> <br>
        Pot:$
        <?PHP echo number_format($row['pot']); ?> <br>
        <br>
        <?php } ?> 
    </div>
    <!-- Body -->
    <!-- Winners -->
    
  <!--Buttons-->
    <?php 
    // Include config file
        require_once "Config_Quick_Links.php";    
    ?>
    <!--Buttons-->  
    
    </div><!-- comment -->

    

    
  </body>
</html>
