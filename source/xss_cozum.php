<?php
$mesaj .= 'Çıktı ' . $_GET[ 'name' ];
//htmlspecialchars kullanılan özel karakterleri devre dışı bırakır
//Bu sayade scriptler pasif hale getirilir sadece text olarak yazdırılır
$mesaj=htmlspecialchars($mesaj, ENT_QUOTES, 'UTF-8');
echo "<pre>Mesajınız :  $mesaj</pre>";
?>