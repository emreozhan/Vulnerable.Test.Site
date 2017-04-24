<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require_once("includes/config.php")?>
<?php include("includes/functions.php")?>

<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<title>KOCAELİ ÜNİVERSİTEİ BİLGİSAYAR MÜHENDİSLİĞİ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" />
<link href="css/bootstrap.css" rel="stylesheet" />
<link  rel="stylesheet" href="font-awesome/css/font-awesome.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<body>


		<div class="row col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">

			<div class="col-xs-12 col-sm-12 col-md-6  col-lg-5">

				<?php
				echo"ipucu<br>";
				echo"
                <form name=\"XSS\" action=\"#\" method=\"GET\">

				<input type=\"text\" name=\"name\" value=\"\"><br>
				<input type=\"submit\" value=\"Submit\">
				</form>

				";

				if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
					$html .= '<pre>Hellooo ' . $_GET[ 'name' ] . '</pre>';
				}
				echo "Çıktı :<br>$html";
				?>




				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Sömürü Açıklama</h3>
					</div>
					<div class="panel-body">
						sömürüye ait detaylar bilgilendirme
					</div>
				</div>



				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Sömürü kaynak kodu</h3>
					</div>
					<div class="panel-body">
						Açık yaratan kod parçacığı
					</div>
				</div>

				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title">İpucu:</h3>
					</div>
					<div class="panel-body">
						<?php echo"	<b> ?name=&lt;script&gt;alert(\"Denem Pop-up\");&lt;/script&gt;.</b>";?>
					</div>
				</div>

                <br>
			</div>


			<div class="container col-xs-12 col-sm-12 col-md-6  col-lg-5">
				<h2>Kodu Görüntüle</h2>
				<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Zafiyet Görüntüle</button>
				<div id="demo" class="collapse">
					zafiyet olan kodun görüntüleneceği yer
				</div>
			</div>

		</div>


</body>




 
</html>



