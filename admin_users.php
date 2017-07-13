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




<h3 style="text-align:center">Current Users in the System</h3>

<table class="table table-hover" >
 <tr>
 <th>Name</th>
 <th>Surname</th>
  <th>Role</th>
  <th>Active</th>
  <th>Registration Date</th>
  <th>Disable Date</th>
  <th>Enable Date</th>
  <th>Operation</th>

 </tr>
 <?php
include'database.php';

$page=$_GET['page'];
if($page==''||$page=='1')
{
$page1=0;
}
else
{
$page1=($page*5)-5;
}

$query="SELECT * FROM users WHERE role='User' limit $page1,5";
$run=mysql_query($query);
while($result=mysql_fetch_assoc($run))
{
?> 
<tr>
 <td><?php echo$result['name'];?></td>
 <td><?php echo$result['surname'];?></td>
 <td><?php echo$result['role'];?></td>
 <td><?php echo$result['active'];?></td>
 <td><?php echo$result['register_date'];?></td>
 <td><?php echo$result['disable_date'];?></td>
 <td><?php echo$result['enable_date'];?></td>
 <td><a href="admin_users.php?disable=<?php echo$result['username'];?>"><input type="submit" class="btn btn-primary" value="Disable"></a>
 
 <a href="admin_users.php?enable=<?php echo$result['username'];?>"><input type="submit" class="btn btn-success" value="Enable"></a>
 </td>
 </tr>
 <?php
}
?>
</table>
<?php
function disable()
{ if(isset($_GET['disable']))
   {
   $na=$_GET['disable'];
   $e="UPDATE users SET active='No' WHERE username='$na'";
   @$date = date('Y/m/d', time());
   $s="UPDATE users SET disable_date='$date' WHERE username='$na'";
   if(mysql_query($e)&&mysql_query($s))
    {
	echo'User disabled successfully, please refresh the page to see changes';
	
	
	}
	else
	{
	echo mysql_error();
	}
	
   }

}

disable();

function enable()
{
if(isset($_GET['enable']))
 {if(!empty($_GET['enable']))
   {
   $na=$_GET['enable'];
   @$date = date('Y/m/d', time());
   $query="UPDATE users SET active='Yes' WHERE username='$na'";
   $s="UPDATE users SET enable_date='$date' WHERE username='$na'";
   if(mysql_query($query)&&mysql_query($s))
    {
	echo'User enabled successfully, please refresh the page to see changes';
	
	}
	else
	{
	echo mysql_error();
	}
   }
 }


}
enable();
?>
<div class="container">
<div class="row">
<div  class="col-md-4 col-md-offset-4">
<ul class="pagination ">
<?php
$query1="SELECT * FROM users WHERE role='User'";
$run1=mysql_query($query1);
$count=mysql_num_rows($run1);
$a=$count/5;
$a=ceil($a);
for($b=1;$b<=$a;$b++)
{
  if($page==$b)
   {
   include'paging_active.php';
   
   
   }
   
   else
   {
   include'paging_inactive.php';
   }
   
   }?>
</ul>
</div>
</div>
</div>



<a name="add1"></a>
<div id="addition">
		<h3>Here you can Add or give a priority to a new user:</h3>
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
		<a name="add"></a>
		<input type="submit" value="Add" name="add" class="btn btn-lg btn-success btn-block"/>
   
</form>

</div>
</div>





<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
           <script src="js/bootstrap.min.js" type="text/javascript"></script> 
           <script src="js/angular.min.js" type="text/javascript"></script> 
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/maincontroller.js" type="text/javascript"></script>
</body>
</html>







