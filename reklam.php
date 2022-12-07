
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="Image/tarayiciIcon.png" type="iamge/x-icon"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Changa:wght@300&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="Design/reklamek.css">
	<title>Reklam</title>
</head>
<body>
	<div class="topContent">
		<?php include 'head.html'; ?>
		<form action="<?=$_SERVER['PHP_SELF']?>" method="post">

		<div  class="KullanıcıBilgileri">
			<h1>Reklam Başvurusu</h1>
			
			<input type="text" name="isim" placeholder="Adınız..." required><br><br>
			<input type="text" name="soyisim" placeholder="Soydınız..." required><br><br>
			<input type="text" name="mail" placeholder="Mail Adresiniz..." required><br><br>
			<input type="text" name="mesaj" placeholder="Mesajınız..." required><br><br>
			<input type="submit" name="kaydet"  value="Gönder"><br><br>
		</div>
		</form>
		<?php 
	include 'db.php';
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$ad = $_POST['isim'];
		$soyad = $_POST['soyisim'];
		$mail = $_POST['mail'];
		$mesaj = $_POST['mesaj'];


		if ($db->exec("INSERT INTO reklam (ad, soyad, mail, mesaj) VALUES ('$ad','$soyad','$mail','$mesaj')"))
			$alert = "<script>alert('Reklam Mesajınız Gönderildi')</script>";
			echo $alert;
		
	}	
	include 'footer.php' ?>
	</div>
</body>
</html>
