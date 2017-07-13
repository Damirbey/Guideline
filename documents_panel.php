<div class="navabar-top-green-line navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class=" navbar-brand" href="main1.php">Aid Help</a>
          </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="contacts.php"  style="font-size:15px">Contacts</a></li>
            <li><a href="blogs.php"  style="font-size:15px">Blogs</a></li>
              <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Document Categories <span class="caret"></span></a>
          <ul class="dropdown-menu" style="padding-top:0px;padding-bottom:0px;">
            <li><a href="documents.php" style="border-bottom:1px solid gray">For Citizenship</a></li>
            <li><a href="documentsVisa.php" style="border-bottom:1px solid gray" >For Visa</a></li>
            <li><a href="documentsWorkPermit.php">For Work Permit</a></li>
          </ul>
        </li>

          </ul>
                		 <?php
			 include'variables.php';
			 ?>
          <?php
if(!empty($_SESSION['id'])&&isset($_SESSION['id']))
{
include'lg_in.php';
}
else
{
include'lg_out.php';
}


?>
        </div><!--/.nav-collapse -->
      </div>
    </div>