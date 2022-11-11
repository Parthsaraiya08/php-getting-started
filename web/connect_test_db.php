<?php
$servername='us-cdbr-east-06.cleardb.net';
$username="b62fe05b205769";
$password="0462fe2a";
try
{
    $con=new PDO("mysql:host=$servername;port=8889;dbname=heroku_213c908b09cc5ee",$username,$password); 
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
    echo'<br>Connection failed';
}
     
?>