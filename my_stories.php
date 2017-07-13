<!DOCTYPE html>
        <html>
		           <?php
             require'database.php';
             include'variables.php';
 
                   ?>
           <head>
                      <!-- Css files-->
             <meta http-equiv=Content-Type content="text/html;charset=UTF-8">
             <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
             <link type="text/css" rel="stylesheet" href="css/blogs.css"/>
             <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">   
           </head>
         <body ng-app="myApp" ng-controller="PageController" style="background-color:rgba(249, 248, 244, 0.41);">
  
       <!--NavbAr-->
       <?php
	  
	  if(empty($_SESSION['id']))
	  {
	  header('Location:main1.php');
	  }
	   if($_SESSION['id']==2)
	   {include'admin_nav.php';}
	   else if($_SESSION['id']==3)
	   {include'info_man_nav.php';}
	   else if($_SESSION['id']==4)
	   {include'imm_off_nav.php';}
	   else 
	   {
	   include'blog_panel.php';}
	   ?>
    
             <!--Blogs div -->
             <div class="container" style="margin-top:50px">
	<div class="row destacados">
		<?php 
		     $page=$_GET['page'];
if($page==''||$page=='1')
{
$page1=0;
}
else
{
$page1=($page*3)-3;
}
$id=$_SESSION['id'];
			$take="SELECT * FROM blogs WHERE photo!='293.png' AND id='$id' limit $page1,3";
					
			$run=mysql_query($take);
			$rows=mysql_num_rows($run);
			if($rows==0)
			{
			echo'<h2><strong>Currently you did not post any comment</strong></h2>';
			}
			else
			{
			while($dis=mysql_fetch_assoc($run))
			{
		?><div class="col-md-4">
		
    		<div>
			
			
				<?php echo "<img src='photo/".$dis['photo']."' class=img-circle img-thumbnail height = '130px' width = '130px'> "?>
				<h2><?php echo $dis['name'].' '.$dis['surname'];?></h2>
					
			
				<p><?php echo $dis['content'];?></p>
				<p><strong><?php echo"year/month/day :"." ".$dis['time'];?></strong></p>
				
				
				 
				<a href="my_stories.php?remove=<?php echo $dis['photo'];?>"><input type="submit" value="Delete" class="btn btn-primary"></a>
				
				
				
			</div> 
		</div><?php }}
		
		

		?>

</div>
<div class="container">
<div class="row">
<div  class="col-md-4 col-md-offset-4">
<ul class="pagination ">
<?php
$id=$_SESSION['id'];
$query1="SELECT * FROM blogs WHERE photo!='293.png' AND id='$id'";
$run1=mysql_query($query1);
$count=mysql_num_rows($run1);
$a=$count/3;
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
	<div class="col-md-4 col-md-offset-4" style="margin-top:40px">
	<a></a>
	<?php
	delete();
	function delete()
{ if(isset($_GET['remove']))
   {
   $na=$_GET['remove'];
   $e="DELETE FROM blogs WHERE photo='$na'";
   $d=mysql_query($e);

   if($d)
    {
	echo'Post is deleted successfully';
	
	}
	else
	{
	echo mysql_error();
	}
   }

}	?>



     		</div>	  
	</div>

                           
             <!--JS files-->
           <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
           <script src="js/bootstrap.min.js" type="text/javascript"></script> 
           <script src="js/angular.min.js" type="text/javascript"></script> 
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/maincontroller.js" type="text/javascript"></script>
       </body>
    </html>