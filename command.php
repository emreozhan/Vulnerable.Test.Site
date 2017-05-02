<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require_once("includes/config.php")?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("includes/header.php")?>


<body>


		<div class="row col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">

			<div class="col-xs-12 col-sm-12 col-md-6  col-lg-6">

				<?php
                echo"<br>
				<form name=\"ping\" action=\"#\" method=\"get\">
			    <p><h4>Terminal Yardımcısı</h4>
				Yardım almak istediğiniz komut adını girin:<br>(örnek: MKDIR, IP, VER, TREE, SHUTDOWN)<br><br>
				<input type=\"text\" name=\"talep\" size=\"30\" style='width: 100%'><br><br>
				<input type=\"submit\" name=\"Submit\" value=\"Sorgula\">
			    </p>
			    </form>
			    \n";
                ?>

                <?php include("source/command_source.php"); ?>




                <br>
			</div>


			<div class="container col-xs-12 col-sm-12 col-md-6  col-lg-6">
				<h2>Yardım !</h2>
				<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo">Zafiyet Görüntüle</button>
				<div id="demo" class="collapse">
<br>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sömürü Açıklama</h3>
                        </div>
                        <div class="panel-body">
                           <ul><br>Web uygulamalarının input mekanizmasındaki güvenlik eksikliği veya validation eksikliği
                            sonucunda saldırganın hedef sisteminin komut satırında/terminalinde istismar komutları çalıştırmasına
                            sebebiyet veren bir zafiyet çeşididir.Bu zafiyet yüzünden sunucuya ait dosyalara erişim sağlayıp istenilen
                            şekilde düzenleme yapılabilir sunucudaki dosyalar silinebilir veya açıkta tutulan dosyalara uzaktan erişim
                            sağlayarak görüntüleme yapılabilir .

                           </ul>
                        </div>
                    </div>



                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sömürü kaynak kodu</h3>
                        </div>
                        <div class="panel-body">
                            <b><ul>  Zafiyete Sebep Kod parçası</b><br><br>
                            Forma girilen değer bu satırlarda bir değişkene aktarılarak terminalde çalıştırılıyor dönen değer ekrana yazdırılıyor.
                            Validation işlemleri yapılmadığı için site istismara açık hale geliyor
                            </ul>
                            <pre><?php show_source("source/command_source.php"); ?></pre>

                           <br><b>  <ul>Zafiyeti Engelleme:</ul></b><br>
                           <pre> <?php show_source("source/command_cozum.php"); ?></pre>
                        </div>
                    </div>

                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">İpucu:</h3>
                        </div>
                        <div class="panel-body">
                            <?php echo"	<ul><br><br>
	                                        <li><pre>/command.php?talep=ipconfig+%26%26+time&Submit=Sorgula#</pre><br>
                                            <li><pre>/command.php?talep=ping+localhost+%26%26+time&Submit=Sorgula#</pre><br>
                                            <li><pre>/command.php?talep=mkdir+C%3A\commandinjectionklasor+%26%26+time+&Submit=Sorgula#</pre></ul>";?>
                        </div>
                    </div>				</div>
			</div>

		</div>


</body>




 
</html>



