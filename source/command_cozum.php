<?php
if( isset( $_GET[ 'Submit' ]  ) ) {
$talep = $_GET[ 'talep' ];
// Girilen inputta '&&' ve '||' sembolleri var ise bu
// semboller "str_replace" fonksiyonu ile kaldırılır
// Böyle script komutları devre dışı bırakılmış olur.
$talep = str_replace( '&&'  , '', $talep );
$talep = str_replace( '||'  , '', $talep );

    $komut=shell_exec(''.$talep.' /?');
echo "<pre>{$komut}</pre>";
}
?>