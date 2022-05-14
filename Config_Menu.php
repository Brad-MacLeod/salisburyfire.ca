<link href="Config_Menu.css" rel="stylesheet">
<script src="jquery-1.11.1.min.js"></script>
<script src="jquery.ui.effect.min.js"></script>
<script src="jquery.ui.effect-drop.min.js"></script>
<script src="jquery.ui.effect-fade.min.js"></script>
<script src="jquery.ui.effect-slide.min.js"></script>
<script src="wb.slideshow.min.js"></script>
    <script>
$(document).ready(function()
{
   $("#NavigationBar1 a").mouseenter(function(e)
   {
      $("#NavigationBar1_wrapper").parent().remove();
      var $wrapper = $("<div id='NavigationBar1_wrapper'></div>");
      var $link = $("<a></a>");
      $link.attr('href', $(this).attr('href'));
      $link.attr('target', $(this).attr('target'));
      $wrapper.css('left', $(this).offset().left+'px');
      $wrapper.css('top', $(this).offset().top+'px');
      $wrapper.css('width', $(this).find('img').width()+'px');
      $wrapper.css('height', $(this).find('img').height()+'px');
      $wrapper.appendTo("body");
      $wrapper.wrap($link);
      $wrapper.mouseout(function()
      {
         $('#NavigationBar1_wrapper').parent().remove();
         $("#NavigationBar1 span").show('drop', { easing: 'linear', direction: 'left'}, 500);
      });
      $(this).children("span").hide('drop', { easing: 'linear', direction: 'left'}, 500);
   });
   $("#imgDep").slideshow(
   {
      interval: 6000,
      type: 'sequence',
      effect: 'slide',
      direction: 'left',
      pagination: false,
      effectlength: 1000
   });
   $("#PhotoGallery1 .image a").hover(function()
   {
      var x = $('img', this).offset().left;
      var y = $('img', this).offset().top + $('img', this).outerHeight() - $('.caption', this).outerHeight();
      $('.caption', this).offset({top: y, left: x });
      $('.caption', this).css('width', $('img', this).outerWidth()-16);
      $('.caption', this).stop().animate({opacity: 0.78},{queue:false, duration:500});
   }, function()
   {
      $('.caption', this).stop().animate({opacity: 0},{queue:false, duration:500});
   });
});
</script> 
<div id="NavigationBar1" style="position:absolute;left:132px;top:98px;width:720px;height:25px;z-index:1;">
      <ul class="navbar">
        <li><a href="./index.php">
                <img alt="Home" title="Home" src="images/menu/menu_home_select.gif">
                <?php 
                if ($cPage == "Home"){
                    echo "<span><img alt='Home' title='Home' src='images/menu/menu_home_select.gif'></span>";
                }else{
                    echo "<span><img alt='Home' title='Home' src='images/menu/menu_home_off.gif'></span>";
                }
                ?>
            </a>
        </li>
        <li><a href="./Fire_Fighters.php">
                <img alt="Fire Fighters" title="Fire Fighters" src="images/menu/menu_ff_select.gif">
                <?php 
                if ($cPage == "FireFighers"){
                    echo "<span><img alt='Fire Fighters' title='Fire Fighters' src='images/menu/menu_ff_select.gif'></span>";
                }else{
                    echo "<span><img alt='Fire Fighters' title='Fire Fighters' src='images/menu/menu_ff_off.gif'></span>";
                }
                ?>
            </a>
        </li>
        <li><a href="./Activities.php">
                <img alt="Activites" title="Activites" src="images/menu/menu_activites_select.gif">
                <?php 
                if ($cPage == "Activities"){
                    echo "<span><img alt='Activites' title='Activites' src='images/menu/menu_activites_select.gif'></span>";
                }else{
                    echo "<span><img alt='Activites' title='Activites' src='images/menu/menu_activites_off.gif'></span>";
                }
                ?>
            </a>
        </li>
        <li><a href="./50_50.php">
                <img alt="50/50" title="50/50" src="images/menu/menu_5050_select.gif">
                <?php 
                if ($cPage == "50/50"){
                    echo "<span><img alt='50/50' title='50/50' src='images/menu/menu_5050_select.gif'></span>";
                }else{
                    echo "<span><img alt='50/50' title='50/50' src='images/menu/menu_5050_off.gif'></span>";
                }
                ?>
            </a>
        </li>
        <li><a href="./Contact_Us.php">
                <img alt="Contact Us" title="Contact Us" src="images/menu/menu_contact_select.gif">
                <?php 
                if ($cPage == "Contact Us"){
                    echo "<span><img alt='Contact Us' title='Contact Us' src='images/menu/menu_contact_select.gif'></span>";
                }else{
                    echo "<span><img alt='Contact Us' title='Contact Us' src='images/menu/menu_contact_off.gif'></span>";
                }
                ?>
            </a>
        </li>
      </ul>
    </div>