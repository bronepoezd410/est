<?php

$par1_ip = "127.0.0.1";
$par2_name = "root";
$par3_p = "";
$par4_db = "estore_db";



$induction = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);
// or #connect - имя переменной. $connect = mysqli_connect(host:'',user:'',password:'', database:'');


if (!$induction)
{
    echo "Error";
    //die('Error connct.')
}

?>