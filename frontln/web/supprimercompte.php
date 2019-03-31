<?PHP
include "../core/clientC.php";
$ccc= new clientC(); 
if(isset($_POST['supprimer']) && empty($_POST['cin'] ))
{
	$ccc->supprimerclient($_POST["cin"]);


 header('location :localhost/designcuisine/frontln/index.html');
	


}
?>

<form action="modifierprofile.php" method="POST">
	<label>ecrire votre cin</label>
	<input type="text" name="cin" id="cin">
<input type="submit" name="supprimer" value ='supprimer' id="supprimer">
</form>
