<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="Image/tarayiciIcon.png" type="iamge/x-icon"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Changa:wght@300&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>Mesajım Var!!!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="Design/mesaj.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.12/angular-material.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.12/angular-material.min.js"></script>
</head>
<body>
	<div class="topContent">
	<?php include 'head.html' ?>
		<div class="altmesaj" ng-app="BlankApp">

		<div class="mesaj">
			<div class="container">
			<form action="" method="post">
				<h2 class="md-display-1">Bizlere Mesaj Göndermek İster misiniz?</h2>
				<table>
					<tr>
						<td><md-input-container>
						    <label>Adınız...</label>
						    <input maxlength="50" name="ad" ng-model="ad" required="" class="inp">
						    <div ng-messages="colorForm.ad.$error">
						      
						    </div>
						  </md-input-container></td>

						<td><md-input-container>
						    <label>Soyadınız...</label>
						    <input maxlength="50" name="soyad" ng-model="soyad" required="" class="inp">
						    <div ng-messages="colorForm.soyad.$error">
						      
						    </div>
						  </md-input-container></td>
					</tr>
					<tr>
						<td><md-input-container>
						    <label>E-mail Adresiniz...</label>
						    <input type="mail" maxlength="100" name="mail" ng-model="mail" required="" class="inp">
						    <div ng-messages="colorForm.mail.$error">
						      
						    </div>
						  </md-input-container></td>
						<td><md-input-container>
						    <label>Konu Başlığı...</label>
						    <input type="text" maxlength="100" name="baslik" ng-model="baslik" required="" class="inp">
						    <div ng-messages="colorForm.baslik.$error">
						   
						    </div>
						  </md-input-container></td>
					</tr>
					<tr>
						<td><md-input-container>
						    <label>Mesajınız...</label>
						    <textarea name="mesaj" ng-model="mesaj" required="" class="inp"></textarea>
						    <div ng-messages="colorForm.mesaj.$error">
						      
						    </div>
						  </md-input-container></td>

						<td><md-button style="background: darkkhaki; color: black;"
							type="submit" class="md-accent md-raised" aria-label="Custom Icon Button">Gönder</md-button>	</td>
					</tr>
				</table>
			</form>
			</div>
		</div>
		</div>		
		<div class="reklam">
			<a href="reklam.php"><img class="solYanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>
			<a href="reklam.php"><img class="sagYanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>

			<a href="reklam.php"><img class="solYanReklam2" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>
			<a href="reklam.php"><img class="sagYanReklam2" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"></a>
		</div>
				<?php include 'footer.php' ?>

	</div>


<script>
	if ( window.history.replaceState ) {
	  window.history.replaceState( null, null, window.location.href );
	}//Tarayıcının input geçmişini siler.
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular-animate.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular-aria.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular-messages.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.12/angular-material.min.js"></script>
<script src="js/app.js"></script>


<?php 
	include 'db.php';
	$mesajD = " ";
	if($_POST){
		$ad = $_POST['ad'];
		$soyad = $_POST['soyad'];
		$mail = $_POST['mail'];
		$baslik = $_POST['baslik'];
		$mesaj = $_POST['mesaj'];

		if ($db->exec("INSERT INTO mesaj (ad, soyad, mail, baslik, mesaj) VALUES ('$ad','$soyad','$mail','$baslik','$mesaj')")){
			$alert = "<script>alert('MESAJINIZ BAŞARIYLA GÖNDERİLMİŞTİR. KISA SÜRE İÇERİSİNDE MAİL ADRESİNİZE GERİ DÖNÜŞ YAPILACAKTIR.')</script>";
			echo $alert;

		}
		else 	{
				$alert = "<script>alert('MESAJINIZ ALINAMAMIŞTIR. LÜTFEN DAHA SONRA TEKRAR DENEYİNİZ YA DA BİZİMLE MAİL ADRESİMİZDEN İLETİŞİME GEÇEBİLİRSİNİZ.')</script>";
				echo $alert;
				header("Location:main_menu.php");
			}
		}
 ?>




































</body>
</html>