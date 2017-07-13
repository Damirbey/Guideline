
<ul class="nav navbar-nav navbar-right">
        <li><a> <?php

if(isset($_POST['username'])&&isset($_POST['password']))
{ if(!empty($_POST['username'])&&!empty($_POST['password']))
   {
     $username=$_POST['username'];
	 $password=$_POST['password'];
    $query="SELECT * FROM users WHERE username='$username' AND password='$password' AND active='Yes'";
	$query1="SELECT * FROM users WHERE username='$username' AND password='$password' AND active='No'";
	$rd=mysql_query($query1);
	$re=mysql_query($query);
	$row=mysql_num_rows($rd);
	$rows=mysql_num_rows($re);
	if($row==1)
	{
	echo"You are disabled at the moment";
	}
	else if($row==0)
	{
	if($rows==1)
	{
	  $_SESSION['id']=mysql_result($re,0,'id');
	  $_SESSION['name']=mysql_result($re,0,'name');
	  $_SESSION['surname']=mysql_result($re,0,'surname');
	  $_SESSION['username']=mysql_result($re,0,'username');
	  if($_SESSION['username']=='admin')
	  {
	  header('Location:admin_panel.php');
	  }
	  else if($_SESSION['username']=='infoman')
	  {
	  header('Location:info_man_panel.php');
	  }
	  else if($_SESSION['username']=='officer')
	  {
	  header('Location:imm_messages.php');
	  }
	  else
	  {
	  
	  header('Location:redirect.php');
	  
	  }
	  
	}
	else
	{ echo'Wrong username or password';
	}
	}
   }
   else
   {
   echo'Fill in all the fields please';
   }



}




?></a></li>
        <li><a href="registration1.php">Sign up</a></li>
		
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign In<span class="caret"></span></a>

<div class="dropdown-menu" style="width:240px;padding:10px;height:200px;margin-top:5px;opacity:0.98">
                                        <div>
										
                                            <div class="form-group">
                                                <div class="input-group">
                                                     <span class="input-group-addon">
                                                       <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                                    </span> 
													<form action="<?php echo$_SERVER['Script_Name']?>" method="POST">
                                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                                </div>
                                            </div>
                                            <div class="form-group">
											
                                                <div class="input-group">
                                                   <span class="input-group-addon">
                                                       <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                                    </span>  
                                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                                </div>
                                            </div>
                                            <div class="form-group" style="padding-top:3px">
                                                 <input  type="submit"  value="Sign In" class="btn btn-lg btn-primary btn-block" >
												 
                                            </div>
											</form>
											 

                                            <a href="forgot.php" style="padding-left:55px;">Forgot password?</a>
                                        </div>
                                    </div>
									                    </li>
          </ul>