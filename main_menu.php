<?php 
	include 'db.<php';

	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="Image/tarayiciIcon.png" type="iamge/x-icon"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Changa:wght@300&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Ana Menü</title>
	<link rel="stylesheet" type="text/css" href="Design/mainek.css">
</head>
<body>
	<div class="topContent">

		<?php
				include 'head.html'; 
			$icerik = $db->query("SELECT * FROM baslik ORDER BY baslik ASC");
			$icerikAl = $icerik->fetchAll(PDO::FETCH_ASSOC);
			$icerikler = [];
			foreach ($icerikAl as $icer) array_push($icerikler, $icer);
			echo '<div class="content">';
			foreach ($icerikler as $content) {
				$elem = '<a href="sub_menu.php?id=' . $content['id'] . '"">
				<div class="containerMenu">
					<div class="menu">
						<img class="foto" src=' . $content['fotoURL'] . '><br>
						<h3>' . $content['baslik'] .'</h3>
					</div>
						</a>
				</div>'; 
				echo @$elem;
	
			}
			echo "</div>";

		?>

	<div class="reklam">
		<a href="reklam.php"><img class="solYanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>
		<a href="reklam.php"><img class="sagYanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>

		<a href="reklam.php"><img class="solYanReklam2" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>
		<a href="reklam.php"><img class="sagYanReklam2" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>
	</div>
	<?php include 'footer.php' ?>
	</div>			
</body>
</html>
