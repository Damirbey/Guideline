<?php
$localhost='127.0.0.1';
$username='root';
$password='123';
$database='guideline';
if(!mysql_connect($localhost,$username,$password)||!mysql_select_db($database))
{
die('There is an error in connection');
}
else
{
mysql_connect($localhost,$username,$password);
mysql_select_db($database);

}

?>