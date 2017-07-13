<html>
<head>
<meta http-equiv=Content-Type content="text/html">
             <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
             <link type="text/css" rel="stylesheet" href="css/mainStyle.css"/>
             <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">  
</head>
<body style="background-color:#F4F6F7;">


<?php
include'imm_off_nav.php';

?>
<br/><br/><br/>
<h2 style="text-align:center">Documents in the system</h2>
<div id="addition">
<a name="dis"></a>
<form action="#dis" method="POST">
<h3>Choose type of documents to be displayed</h3>

		<select name="cat" style="padding:10px; border-radius:5px;">
		<option>-------</option>
		<option value="Citizenship">For Citizenship</option>
		<option value="Patent">For Patent</option>
		<option value="Registration">For Registration</option>
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
<th>Heading</th>
<th>Content</th>
<th>Action</th>
</tr>
<?php

 $query="SELECT * FROM documents WHERE category='$type'";
 $run=mysql_query($query);
 while($dis=mysql_fetch_assoc($run))
 {?>
 <tr>
 
 <td><?php echo$dis['header'];?></td>
 <td><?php echo$dis['content'];?></td>
 
 <td><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?delete=<?php echo$dis['id'];?>"><input type="submit" class="btn btn-primary" value="Delete"></a></td>
 </tr>
<?php }?>
</table>	
<?php
function delete()
{
 if(isset($_GET['delete'])&&!empty($_GET['delete']))
  {
  $na=$_GET['delete'];
  $query="DELETE FROM documents WHERE id='$na'";
  if(mysql_query($query))
   {
   echo'<strong>Documents deleted successfully</strong>';
   
   }
   else
   {
   echo mysql_error();
   }   
  }
}
delete();


?>


<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
           <script src="js/bootstrap.min.js" type="text/javascript"></script> 
           <script src="js/angular.min.js" type="text/javascript"></script> 
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/maincontroller.js" type="text/javascript"></script>

</body>
</html>
