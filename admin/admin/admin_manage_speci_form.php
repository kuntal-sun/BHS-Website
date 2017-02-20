<?php
include_once 'config_bhsdb.php';

$mod=$_POST['model'];
$type=$_POST['type'];
$com_chm=$_POST['com_cham'];
$clyn_num=$_POST['clyn_no'];
$bs=$_POST['bs'];
$tdsp=$_POST['td'];
$cr=$_POST['cr'];
$rp=$_POST['rp'];
$p=$_POST['p'];
$spc=$_POST['spc'];
$cm=$_POST['cm'];
$lm=$_POST['lm'];
$sm=$_POST['sm'];
$nw=$_POST['nw'];
$od=$_POST['od'];
$pd=$_POST['pd'];

echo $bs;
echo $pd;
echo $rp;
echo $mod;
echo $type;

$q19=mysql_query("INSERT INTO mach_spec VALUES('$mod','$type','$com_chm','$clyn_num','$bs', '$tdsp','$cr','$rp','','$spc','$cm','$lm','$sm','$nw','$od','$pd')");
	echo "specification submitted successfully";
	
	?>