<?php
include'variables.php';
session_destroy();
$back=$_SERVER['HTTP_REFERER'];

if($_SESSION['id']=='2')
{
header('Location:main1.php');}
else if($_SESSION['id']=='3')
{
header('Location:main1.php');}

else if($_SESSION['id']=='4')
{
header('Location:main1.php');}

else
{
header('Location:'.$back);
}
?>
