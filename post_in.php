<h4>Please Choose a photo to be posted on the blog</h4>
			<form action="#act" method="POST" enctype="multipart/form-data">
			
			<input type="file"  name="photo"/><br/>
			<textarea cols="30" rows="5" name="content" class="form-control input-sm " type="textarea"   rows="7" >
			</textarea><br/><br/>
<?php
			if(isset($_POST['upload']))
             {
			 @$name=$_FILES['photo']['name'];
			 @$type=$_FILES['photo']['type'];
			 @$tmp_data=$_FILES['photo']['tmp_name'];
			  @$date = date('Y/m/d', time());
			 @$content=$_POST['content'];
			 if(isset($name)&&!empty($name)&&isset($content)&&!empty($content))
			  { 
			  $name=rand(1,1000);
             @$new=$name.'.png';
			     if($type=='image/png'||$type=='image/jpeg')
			     {
				 $check="SELECT content FROM blogs WHERE content='$content'";
				 $run=mysql_query($check);
				 $rows=mysql_num_rows($run);
				   if($rows==1)
				    {echo'POST already exists';}
				    else
				    {
					$id=$_SESSION['id'];
					$name=$_SESSION['name'];
					$surname=$_SESSION['surname'];
					$location='photo/';
					$insert="INSERT INTO blogs VALUES('','$id','$name','$surname','$new','$content','$date')";
					if(move_uploaded_file($tmp_data,$location.$new)&&mysql_query($insert))
					 {
					 echo'Post uploaded successfully';
					 header('refresh:1');
					 }
					 else
					 { echo'There is a problem occured in posting your data';
					 }
					}
				 
				 
				 }
				 else
				 {echo'Photo must be in <strong>jpg</strong> or <strong>png</strong> format'; }
				 
			  }
			 else
              {echo'Please fill in all the fields';}			 
			 }
            
			
			
			
?>			<br/>
			<input type="submit" class="btn btn-primary" value="POST" name="upload"/>
			
			</form>
			<!--Inspired by http://tutorialzine.com/2012/02/apple-like-login-form/ - Apple-like Login Form with CSS 3D Transforms -->


