<html>
<head>
<meta http-equiv=Content-Type content="text/html">
             <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
             <link type="text/css" rel="stylesheet" href="css/mainStyle.css"/>
             <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">  
</head>
<body style="background-color:#F4F6F7;">


<?php
include'admin_nav.php';

?>
<br/><br/><br/>
<h3 style="text-align:center">Current Staff in the System</h3>

<table class="table table-hover" >
 <tr>
 <th>Name</th>
 <th>Surname</th>
  <th>Role</th>
  <th>Operation</th>

 </tr>
 <?php
include'database.php';
$query="SELECT * FROM users WHERE id='3' OR id='4'";
$run=mysql_query($query);

while($result=mysql_fetch_assoc($run))
{
?>
 <tr>
 <td><?php echo$result['name'];?></td>
 <td><?php echo$result['surname'];?></td>
 <td><?php echo$result['role'];?></td>
 
 <td><a href="admin_panel.php?delete=<?php echo$result['username'];?>"><input type="submit" class="btn btn-primary" value="Delete"></a></td>
 </tr>
 <?php
}
?>
</table>

<?php
function delete()
{ if(isset($_GET['delete']))
   {
   $na=$_GET['delete'];
   $e="DELETE FROM users WHERE username='$na'";
   if(mysql_query($e))
    {
	echo'User deleted successfully';
	
	}
	else
	{
	echo mysql_error();
	}
	
   }

}

delete();
?>
<!--Yokub sdelay mne ohuenniy dizayn v etoy oblasti, table trogat ne nado -->
<div id="addition">
		<h3>Here you can Add or give a role to a new user:</h3>
<div id="form">

<form action="#add" method="POST">

			    				
       <input type="text" name="name" value="<?php echo$_POST['name']?>" placeholder="name"/><br/><br/>
       <input type="text" name="sur" value="<?php echo$_POST['sur']?>" placeholder="surname"/><br/><br/>     
       <p><em>Username(for information manager username:<strong>'infoman'</strong> ; immigration officer:<strong>'officer'</strong>):</em></p> <input type="text" name="username" value="<?php echo$_POST['username']?>"placeholder="username"/><br/><br/>
	    <input type="text" name="pass" placeholder="password"/><br/><br/>
		<input type="text" name="email" value="<?php echo$_POST['email']?>" placeholder="email"/><br/><br/>
		<p>Choose a role for a user:</p>
		<select name="role" style="padding:10px; border-radius:5px;">
		<option>------</option>
		<option value="User">User</option>
		<option value="information manager">Information Manager</option>
		<option value="immigration officer">Immigration Officer</option>
		</select><br/><br/>
<em style="color:green;"><?php
		if(isset($_POST['add']))
		{ $cou=1;
		  @$name=$_POST['name'];
		  @$sur=$_POST['sur'];
		  @$user=$_POST['username'];
		  @$pas=$_POST['pass'];
		  @$role=$_POST['role'];
		  @$email=$_POST['email'];
		  @$date = date('Y/m/d', time());
		  if(isset($name)&&isset($sur)&&isset($pas)&&isset($email)&&isset($role)&&isset($user)&&!empty($name)&&!empty($sur)&&!empty($pas)&&!empty($role)&&!empty($user)&&!empty($email))
		   {
		   $query="SELECT * FROM users WHERE  role='$role'";
		   $second="SELECT * FROM users WHERE username='$user'";
		   $run=mysql_query($second);
		   $rows=mysql_num_rows($run);
		   if($rows==1)
		   {echo'Username already exists';}
		   else{
		        $ex=mysql_query($query);
		         while($ch=mysql_fetch_assoc($ex))
		        {
		         if($ch['role']=='information manager'||$ch['role']=='immigration officer')
		         {echo'Information or Immigration officers are already exist , you can not add more than one';
			     $cou--;
			     break;
			 
			     }
			 
		         }
		   
		        if($cou==1)
		        {if($role=='information manager')	
                  {$insert="INSERT INTO users VALUES('3','$name','$sur','$user','$pas','$email','$role','Yes','$date','0','0')";
			       if(mysql_query($insert))
                    {echo'User ADDED SUCCESSFULLY';
					}
                    else
                    {echo mysql_error();}}	
					
		        else if($role=='immigration officer')
               {
			
			   $insert="INSERT INTO users VALUES('4','$name','$sur','$user','$pas','$email','$role','Yes','$date','0','0')";
			     if(mysql_query($insert))
                 {echo'User ADDED SUCCESSFULLY';
				 }
                else
                 {echo mysql_error();}
			
			    }			
					
               else
              {$insert="INSERT INTO users VALUES('','$name','$sur','$user','$pas','$email','$role','Yes','$date','0','0')";
			   if(mysql_query($insert))
                 {echo'User ADDED SUCCESSFULLY';
				 }
              else
               {echo mysql_error();}}			 
			  }
		     }}
		   else
           {
		   echo'Please fill in all the fields';
		   }	}	  
		   
		
		?></em><br/><br/>
		<a name="add"></a><input type="submit" value="Add" name="add" class="btn btn-success"/>
        <a href="admin_users.php"><input type="button" class="btn btn-danger" value="Show users"></a>
   
</form>

</div>
</div>


</body>
</html>
