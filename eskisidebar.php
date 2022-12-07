<link rel="stylesheet" type="text/css" href="Design/header.css"/>
<link rel="stylesheet" type="text/css" href="Design/sideBar.css">
<link rel="stylesheet" type="text/css" href="Design/dropMenu.css">
<link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	

	<div  id="leftSidebar" onclick="toggleLeftSidebar()">
		<a href="main_menu.php"><div class="kutu">
      		<label style="cursor: pointer;" class="main_menu"> Ana Sayfa </label></div></a>
	<?php
            include 'db.php';

			$icerik = $db->query("SELECT * FROM baslik ORDER BY baslik ASC");
			$icerikAl = $icerik->fetchAll(PDO::FETCH_ASSOC);
			$icerikler = [];
			foreach ($icerikAl as $icer) array_push($icerikler, $icer);
			foreach ($icerikler as $content) {
				$elem = '<a href="sub_menu.php?id=' . $content['id'] . '"><div class="kutu">
      		            <h4>' . $content['baslik'] .'</h4></div></a>'; 
				echo $elem;
	
			}

		?>

	    	<div class="leftSidebarButton"><img style="background-color: darkkhaki;" src="Image/menu.png"></div>   
  	</div>
    <script type="text/javascript" src="js/main.js"></script>
	<div class="tophead">
		
	</div>
	<div class="head">
		<a href="main_menu.php"><img src="Image/logo.png"></a>
		<label class="title">SON DİN İSLAM</label>
		<a href="main_menu.php"><img class="mko" src="Image/logo.png"></a>
	</div>
    <div class="header">
        <ul class="head">
            <?php 
                foreach ($icerikler as $contents) {
                    $ele = '<li class="hvr-overline-from-center"> <a href="sub_menu.php?id='. $contents['id'] .'">' . $contents['baslik'] . '</a>';
                    echo $ele;
                }
            ?>
        </ul>
    </div>


 <!--     <li><a href="ders.php">Ana sayfa</a>
       <ul class="head">
          <li><a target="_blank" href="https://www.php.net/">Ana sayfa</a></li>
          <li><a target="_blank" href="https://www.w3.org/Style/CSS/">Ana sayfa</a></li> 
          <li><a target="_blank" href="https://whatwg.org/">Ana sayfa</a></li>      
        </ul> 


      </li>-->