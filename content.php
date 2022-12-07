<?php
	session_start();
	include 'db.php';
	echo '<div class="topContent">';
	include 'head.html';

	$s = $_GET['q'];


	$query = $db->query("SELECT * FROM icerik INNER JOIN altbaslik ON icerik.id = altbaslik.icerik_id WHERE altbaslik.uniq = '$s' ",PDO::FETCH_ASSOC);

	foreach($query as $p)
		$soru = $p;
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="Image/tarayiciIcon.png" type="image/x-icon"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Changa:wght@300&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="Design/contentek.css">
	<meta charset="utf-8">
	<title><?php echo $soru['title']; ?></title>
</head>
<body>


	<div class="container">
		<div class="subcontainer">
			
			<div class="containerbar">
				<div class="leftcontent">
					<h2 class="top"><?php echo $soru['title']; ?></h2>
					<span><?php echo $soru['content']; ?></span>
				</div>
				
				<div class="rightcontent">
					<img width="320px" height="auto" src= "<?php echo $soru['fotoURL']; ?>" ><br>
					<b><?php echo $soru['define']; ?></b><br>
					<img width="320px" height="auto" src= "<?php echo $soru['fotoURL2']; ?>" ><br>
					<b><?php echo $soru['define2']; ?></b><br>
					<img width="320px" height="auto" src= "<?php echo $soru['fotoURL3']; ?>" ><br>
					<b><?php echo $soru['define3']; ?></b><br>
					<img width="320px" height="auto" src= "<?php echo $soru['fotoURL4']; ?>" ><br>
					<b><?php echo $soru['define4']; ?></b><br>
					<img width="320px" height="auto" src= "<?php echo $soru['fotoURL5']; ?>" ><br>
					<b><?php echo $soru['define5']; ?></b><br>




				</div>
			</div>
		</div>
	</div>

	<div class="reklam">
		<a href="reklam.php"><img class="solYanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>
		<a href="reklam.php"><img class="sagYanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>

		<a href="reklam.php"><img class="solYanReklam2" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>
		<a href="reklam.php"><img class="sagYanReklam2" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>
	</div>
	<?php include 'footer.php'; ?>	
	</div>
</body>
</html>


