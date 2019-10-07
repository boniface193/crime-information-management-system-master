<?php

$connect=mysql_connect('localhost','root','');
if(!$connect){
echo mysql_error();
}
$database=mysql_select_db("crime");
if(!$database)
{
echo mysql_error();
}


?>


                     
