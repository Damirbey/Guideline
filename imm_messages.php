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
<h2 style="text-align:center">Your all unanswered messages:</h2>


		
</div>
<table class="table table-hover" >
<tr>
<th>From</th>
<th>Content</th>
<th>Date</th>
<th>Answer</th>
<th>Action</th>
</tr>
<?php
include'database.php';
include'variables.php';
$page=$_GET['page'];
if($page==''||$page=='1')
{
$page1=0;
}
else
{
$page1=($page*3)-3;
}
$query="SELECT * FROM messages WHERE answer='No'  limit $page1,3";
$run=mysql_query($query);
$rows=mysql_num_rows($run);
if($rows==0)
{echo'<h3 style="text-align:center;">You do not have any messages at the moment</h3>';}
else
{
while($dis=mysql_fetch_assoc($run))
{
?> 
<tr>
 <td><?php echo$dis['name'].' '.$dis['surname'];?></td>
 
 <td><?php echo$dis['content'];?></td>
 <td><?php echo$dis['date'];?></td>
 <td><?php echo$dis['answer'];?></td>
 <td><a href="sel_mess.php?mess=<?php echo$dis['id'];?>"><input type="submit" class="btn btn-primary" value="Reply"></a>
 
 
 </td>
 </tr>
 <?php
}}
?>

 
</table>	


<div class="container">
<div class="row">
<div  class="col-md-4 col-md-offset-4">
<ul class="pagination ">
<?php
$query1="SELECT * FROM messages WHERE answer='No'";
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



<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
           <script src="js/bootstrap.min.js" type="text/javascript"></script> 
           <script src="js/angular.min.js" type="text/javascript"></script> 
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/maincontroller.js" type="text/javascript"></script>

</body>
</html>
