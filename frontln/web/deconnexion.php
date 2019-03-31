<?php 
session_start();
// $_SESSION = array();
// session_unset();
 session_destroy();


echo '<script language="Javascript">
			
				document.location.replace("index.php");
				
			</script>';
?>