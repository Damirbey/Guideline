<html>
<head>
<meta http-equiv=Content-Type content="text/html">
             <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
             <link type="text/css" rel="stylesheet" href="css/mainStyle.css"/>
             <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">  
</head>
<body style="background-color:#F4F6F7;">


<?php
include'info_man_nav.php';

?>
<br/><br/><br/>
<h2 style="text-align:center">All News in the System</h2>
<div id="addition">
<a name="dis"></a>
<form action="#dis" method="POST">
<h3>Choose type of a news to be displayed</h3>

		<select name="cat" style="padding:10px; border-radius:5px;">
		<option>-------</option>
		<option value="Economy">Economy of Russia</option>
		<option value="Immigration">Immigration News</option>
		<option value="Political">Political News</option>
		</select><br/><br/>
		<?php
		include'variables.php';
		include'database.php';
		if(isset($_POST['display'])&&!empty($_POST['display']))
         {
		 if(isset($_POST['cat'])&&!empty($_POST['cat']))
           {		 $type=$_POST['cat'];}
		 }		
		?>
		<input type="submit" value="Display" name="display" class="btn btn-success"/>
</form>	
</div>	
<table class="table table-hover" >
 <tr>
 <th>News Headings</th>
 <th>Date of publication</th>
 <th>Action</th>
 </tr>
<?php

 $query="SELECT * FROM news WHERE category='$type' ORDER by id DESC";
 $run=mysql_query($query);
 while($dis=mysql_fetch_assoc($run))
 {
 ?>
 <tr>
 
<td> <a href="sl_news.php?read=<?php echo $dis['id']?>" style="color:black;"><?php echo$dis['header'];?></a></td>
 <td><?php echo$dis['date'];?></td>
 
 <td><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?delete=<?php echo$dis['id'];?>"><input type="submit" class="btn btn-primary" value="Delete"></a></td>
 </tr>
<?php }?>
</table>
<?php
function delete()
{  if(isset($_GET['delete']))
   { if(!empty($_GET['delete']))
      {
	   $na=$_GET['delete'];
	   $del="DELETE FROM news WHERE id='$na'";
	   if(mysql_query($del))
	    {echo'<strong>News is deleted successfully</strong>';}
	   else
	   {
	   echo mysql_error();
	   }
	  }   
   
   }

}
delete();
?>

<div id="addition">
		<h3>To add News go to add Page</h3>
<div id="form">
<a href="add_news.php"><input type="button" value="Add News" class="btn btn-primary"></a>

</div>
</div>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
           <script src="js/bootstrap.min.js" type="text/javascript"></script> 
           <script src="js/angular.min.js" type="text/javascript"></script> 
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/maincontroller.js" type="text/javascript"></script>

</body>
</html>
