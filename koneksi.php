<?php
try
{
$con = new PDO("mysql:host=localhost;dbname=pwpb","root","");
    // echo "database terhubung";
}
catch(PDOException $e)
{
echo $e->getMessage();
}
?>