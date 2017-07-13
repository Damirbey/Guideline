<html>
<head>
  <meta http-equiv= content="text/html" charset="UTF-8">
             <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
             <link type="text/css" rel="stylesheet" href="css/mainStyle.css"/>
             <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">  
</head>
<body style="background-color:#F4F6F7;">


<?php
include'info_man_nav.php';

?>
<br/><br/>
<div class="container">
      <div class="row" style="margin-top:40px">
<?php
include'database.php';
include'variables.php';
$id=$_GET['read'];

$query="SELECT * FROM news WHERE id='$id'";
$run=mysql_query($query);

$heading=mysql_result($run,0,'header');
$content=mysql_result($run,0,'content');
$photo=mysql_result($run,0,'photo');

?>
<h1><?php echo$heading;?></h1>
<?php echo "<img src='news/".$photo."' class=img-circle img-thumbnail height = '300px'> "?>
<p><?php echo$content;?></p>
<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?delete=<?php echo$id;?>"><input type="submit" class="btn btn-primary" value="Delete"></a>
<?php
function delete()
{
if(isset($_GET['delete']))
{ if(!empty($_GET['delete']))
   {
   $id=$_GET['delete'];
   $query="DELETE FROM news WHERE id='$id'";
   if(mysql_query($query))
    {
	echo'News deleted successfully';
	header('refresh:1;url=info_man_panel.php');
	}
   
   }

}

}
delete();



?>

</div>
</div>
</body>
</html>