<?php
define('DB_HOST','localhost');
define('DB_USER','usr1');
define('DB_PASS','usr1x');
define('DB_NAME','examen_desarrollo');
try
{
$connect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

?>