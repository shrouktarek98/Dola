<?php
include_once "navbar.php";
include_once "includes/dbh.inc.php";
?>
   
   

   <section class="pr-form">

	   <form action="includes/logout.inc.php"  method="POST">
	   	<button class="btn btn-danger" name="submit" type="submit">Log Out</button>
	   </form>

   </section>

   
<?php
 include_once "footer.php";
?>
