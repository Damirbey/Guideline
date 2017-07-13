<div class="navabar-top-green-line navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class=" navbar-brand" href="admin_panel.php">Administrator's Panel</a>
		   <ul class="nav navbar-nav">
		    <li><a href="main1.php"  style="font-size:15px">Aid Help</a></li>
			<li><a href="blogs.php"  style="font-size:15px">Blogs</a></li>
			</ul>
          </div>
        <div class="collapse navbar-collapse">
          
             <?php
			 include'variables.php';
			 ?>
			  <ul class="nav navbar-nav navbar-right">
    <li><a href="#"><?php echo $_SESSION['name'];?></a></li>
	<li><a href="#"><?php echo $_SESSION['surname'];?></a></li>
    
	<li><a href="change_pass.php">Change password</a></li>
	<li><a href="log_out.php" >Sign Out</button></a>	
</ul>			 
			   
			   


        </div>
      </div>
</div>