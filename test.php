<?php
$data=$_GET["q"];
//$data=$_POST["nowData"]
$file=fopen("data/datagrid_data1.json","w");
fwrite($file,$data);
//echo(json_encode($data));
?>
