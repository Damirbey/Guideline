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
			$take="SELECT * FROM messages WHERE u_id='$id' Order By id DESC limit $page1,3";
					
			$run=mysql_query($take);
			$rows=mysql_num_rows($run);
			if($rows==0)
			{
			echo'<h2><strong>Currently you do not have any messages</strong></h2>';
			}
			else
			{
                
				$query2="SELECT * FROM users WHERE id='4'";
				$ex1=mysql_query($query2);
                $name1=mysql_result($ex1,0,'name');
				$surname1=mysql_result($ex1,0,'surname');
       			echo"<h2>Your all messages:</h2>";
			while($dis=mysql_fetch_assoc($run))
			{
			
		?>
		<div class="container">
<div class="row">
<div  class="col-md-4 col-md-offset-4">
<ul class="pagination ">
			
			
				
					
			
				<p><?php echo '<strong>'.$dis['name'].' '.$dis['surname'].'</strong>'.' '.':'. $dis['content'];?></p>
				<p><em><strong><?php echo $dis['date'];?></strong></em></p>
				<?php
				if($dis['answer']!='No')
				{
				echo '<strong>'.$name1.' '.$surname1.'</strong>'.' '.':'. $dis['answer'];
				echo'<p><em><strong>'.$dis['date_answer'].'</strong></em></p>';
				}
				
				?>
				
				
				
				
				
				
		</ul>
</div>
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
$query1="SELECT * FROM messages WHERE u_id='$id'";
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