<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require_once("includes/config.php")?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("includes/header.php")?>


<body>


		<div class="row col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">

			<div class="col-xs-12 col-sm-12 col-md-6  col-lg-5">

				<?php
                echo"<br>
				<form name=\"ping\" action=\"#\" method=\"get\">
			    <p>
				Yardım almak istediğiniz komut adını girin:<br><br>
				<input type=\"text\" name=\"talep\" size=\"30\">
				<input type=\"submit\" name=\"Submit\" value=\"Submit\">
			    </p>
			    </form>
			    \n";



				
				
				if( isset( $_GET[ 'Submit' ]  ) ) {
					$talep = $_GET[ 'talep' ];
                    $komut=shell_exec(''.$talep.' /?');
                    //$komut=shell_exec('help '.$talep);
                    echo "<pre>{$komut}</pre>";
				}

				?> 



                <br>
			</div>


			<div class="container col-xs-12 col-sm-12 col-md-6  col-lg-5">
				<h2>Yardım !</h2>
				<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Zafiyet Görüntüle</button>
				<div id="demo" class="collapse">
<br>
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
                            <?php echo"	<b>127.0.0.1 && dir";?>
                        </div>
                    </div>				</div>
			</div>

		</div>


</body>




 
</html>



