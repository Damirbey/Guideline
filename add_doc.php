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



<!--Yokub sdelay mne ohuenniy dizayn v etoy oblasti, table trogat ne nado -->
<div id="addition">
		<h3>Here you can Add a documents:</h3>
<div id="form">

<form action="#add" method="POST" enctype="multipart/form-data">

			    				
       <input type="text" name="head"  placeholder=" Document Heading"/><br/><br/>
       
	    
		
		<p>Choose a photo for a particular news:</p>
		<input type="file" name="photo"/>
		<br/>
		<p>Choose a category for a news</p>
		<select name="cat" style="padding:10px; border-radius:5px;">
		<option value="Citizenship">For Citizenship</option>
		<option value="Patent">For Patent</option>
		<option value="Registration">For Registration</option>
		</select><br/><br/>
		<textarea cols="40" rows="10" name="content" placeholder="Description">
		</textarea>
       <br/><br/>
	   <?php
	   include'database.php';
	   include'variables.php';
	   if(isset($_POST['add'])&&!empty($_POST['add']))
	   { $name=$_FILES['photo']['name'];
          $type=$_FILES['photo']['type'];	
          $tmp_data=$_FILES['photo']['tmp_name'];		  
	   if(isset($_POST['head'])&&isset($name)&&isset($_POST['cat'])&&isset($_POST['content']))
	     { 
           	 
		 if(!empty($_POST['head'])&&!empty($name)&&!empty($_POST['cat'])&&!empty($_POST['content']))
		   { $name=rand(1,1000);
             @$new=$name.'.png';
		     $content=mysql_real_escape_string($_POST['content']);
			 $head=mysql_real_escape_string($_POST['head']);
			 $category=$_POST['cat'];
			 $date = date('Y/m/d', time());
		     if($type=="image/jpeg"||$type=="image/png")
		     {
			 $check="SELECT * FROM documents where content='$content' OR header='$head'";
			 $run=mysql_query($check);
			 $rows=mysql_num_rows($run);
			 if($rows==1)
			 {echo'Particular documents already uploaded into the database';}
			 else
			 {
			 $insert="INSERT INTO documents VALUES('','$new','$head','$content','$category')";
			 $location="documents/";
			 if(move_uploaded_file($tmp_data,$location.$new)&&mysql_query($insert))
			   {echo'Documents uploaded successfully';}
			  else
			  {
			  echo mysql_error();
			  }
			 }
			 
			 }
			 else
			 {
			 echo'Photo must be in <strong>jpg</strong> or <strong>png</strong> format';
			 }
		   }
		   else
		   {
		   echo'Please fill in all the fields';
		   }		 		 
		 }  	        
	   }
	   
	   ?><br/><br/>
		<a name="add"></a><input type="submit" value="Add" name="add" class="btn btn-success"/>
   
</form>

</div>
</div>


</body>
</html>
