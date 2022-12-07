<?php 
	include 'db.<php';
	echo '<div class="topContent">';
	include 'head.html'; 
	session_start();
	$id = $_GET['id'];
	$icerik = $db->query("SELECT * FROM altbaslik INNER JOIN baslik 
		ON altbaslik.baslik_id = baslik.id WHERE baslik.id = ". $id);
	$icerikAl = $icerik->fetchAll(PDO::FETCH_ASSOC);
	$icerikler = [];
	foreach ($icerikAl as $icer) array_push($icerikler, $icer);
	echo '<div class="content">';
	foreach ($icerikler as $content) {
				$elem = '<a href="content.php?q=' . $content['uniq'] . '"">
				<div class="containerMenu">
					<div class="menu">
						<img class="foto" src=' . $content['altBaslikFotoURL'] . '><br>
						<h3>' . $content['alt_baslik'] .'</h3>
					</div>
						</a>
				</div>';
				echo $elem;	
			}
			echo "</div>";
		?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="Image/tarayiciIcon.png" type="iamge/x-icon"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Changa:wght@300&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="Design/subek.css">
	<title><?php echo $content['baslik']; ?></title>
</head>
<body>

	<div class="reklam">
		<a href="reklam.php"><img class="solYanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>
		<a href="reklam.php"><img class="sagYanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>

		<a href="reklam.php"><img class="solYanReklam2" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>
		<a href="reklam.php"><img class="sagYanReklam2" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>
	</div>	
		<?php include 'footer.php'?>	
	</div>


</body>
</html>
