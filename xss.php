<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require_once("includes/config.php")?>
<?php include("includes/functions.php")?>

<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<html xmlns="http://www.w3.org/1999/xhtml">

<?php include("includes/header.php")?>


<body>


		<div class="row col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">
			<br>
			<div class="col-xs-12 col-sm-12 col-md-6  col-lg-5">
				<?php
				echo"
				<form name=\"XSS\" action=\"#\" method=\"GET\">
					<input type=\"text\" name=\"name\" value=\"\" style='width: 100%'><br><br>
					<input type=\"submit\" value=\"Onayla\">
					<input type='reset' value='Temizle'><br><br>
				</form>
				";
				include ("source/xss_sourcecode.php")?>

                <br>
			</div>


			<div class="container col-xs-12 col-sm-12 col-md-6  col-lg-5">
				<h2>Yardım !</h2>
				<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo" >Yardım Görüntüle</button>
				<div id="demo" class="collapse in">
				<br>
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">Zafiyet Açıklama</h3>
						</div>
						<div class="panel-body">
							<p><ul>Bu açık, bir çok zafiyetin oluşma sebebi olan 'Input Validation' eksikliğinden kaynaklanmaktadir.
							Bu zafiyet sayesinde dışarıda müdehale ile sitede <b>html</b> ve <b>JavaScript</b> kodları çalıştırılabilir.
							XSS açığının bir kaç farklı çeşidi bulunmaktadir.</ul></p>
							<ul>
							<li><b>1.Reflected</b></li>
								<p> Bu çeşidde yazılan kodun etkisini o anda site üstünde gösterdiği açık çeşididir,
									yazılan komutlar hiçbir filtreleme veya kontrole uğramadan uygulanır sitenin belirli
									bir bölgesinde etkisini gösterir veya popup şeklinde uyarı verebilir.</p>
							<li><b>2.Stored</b></li>
								<p>Bu açıkta database'e kayıt edilecek bir bilgide sömürü kodları yazılır.Bu kodların database
								   kaydedilmesi sağlanmış olur.Kayıt edilen komutlar  databaseden okunduğunda çalışırlarbu sayede
								   zararlı kod parçacıkları database ve siteye enjekte edilmiş olur.</p>
							<li><b>3.Dom</b></li>
							
							</ul>
						</div>
					</div>



					<div class="panel panel-danger">
						<div class="panel-heading">
							<h3 class="panel-title">Sömürü kaynak kodu</h3>
						</div>
						<div class="panel-body">
							<ul>Açığa sebebiyet veren kod parçacığı:</ul>
							<pre style="margin: 1em 0; display: inherit;"><br><?php show_source("source/xss_sourcecode.php"); ?></pre>
							<ul>Açık sebebi :Kodda görüldüğü gibi kullanıcıdan alınan input değeri hiçbir kontrolden
								geçirilmeden ekrana yazdırılıyor</ul>
							<ul><b>Çözüm:</b></ul>
							<pre style="margin: 1em 0; display: inherit;"><br><?php show_source("source/xss_cozum.php"); ?></pre>

						</div>
					</div>

					<div class="panel panel-warning">
						<div class="panel-heading">
							<h3 class="panel-title">Örnek Sömürüler</h3>
						</div>
						<div class="panel-body">
							<?php echo"	<b> ?name=&lt;script&gt;alert(\"Deneme Pop-up\");&lt;/script&gt;.</b>";?>
							<?php echo"	<b><br> ?name=&lt;script&gt;alert(document.cookie);&lt;/script&gt;.</b>";?>

						</div>
					</div>				</div>
			</div>

		</div>


</body>




 
</html>



