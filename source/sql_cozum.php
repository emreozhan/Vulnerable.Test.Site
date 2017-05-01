<?php
function guvenlik($q)
{	$q=str_replace(",","",$q);
	$q=str_replace(";","",$q);
	$q=str_replace("'","",$q);
	$q=str_replace("`","",$q);
	$q=str_replace('"',"",$q);
	$q=str_replace("<","",$q);
	$q=str_replace(">","",$q);
	$q=str_replace("´","",$q);
	$q=str_replace("|","",$q);
	$q=str_replace("=","",$q);
	$q=str_replace(" ","",$q);
	$q=str_replace("'","",$q);
	$q=str_replace("!","",$q);
	$q=trim($q);
	return $q;
}
?>