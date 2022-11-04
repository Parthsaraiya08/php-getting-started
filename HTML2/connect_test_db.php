<?php
$servername='akaidecember46336.ipagemysql.com';
$username="parth";
$password="parth@789";
try
{
    $con=new PDO("mysql:host=$servername;dbname=parth_db",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}
     
?>