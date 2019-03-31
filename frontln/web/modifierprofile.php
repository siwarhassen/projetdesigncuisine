<?php

include 'header.php';
include "../core/categorieC.php";
include "../core/clientC.php";

?>

<?php 



// include "../core/clientC.php";?>
<h1 style="margin-left: 500px">bienvenue <?php echo  $_SESSION['nom'] ?></h1>
<h3 style="color: #bcba58 ; margin-left: 800px ; margin-top: 40px">Afficher les données de votre profile </h3>
<div style="margin-left: 900px">
<form method="POST" action="">

  <input type="submit" name="affiche" value="afficher">
</form>

</div>
    <table style="margin-left: 650px; margin-top: 40px">
                   <tr>
<th style="width: 70px">nom</th>

<th style="width: 90px">prenom</th>

<th style="width: 120px">email   </th>

<th style="width: 70px">cin</th>
<th style="width: 70px">ville</th>
<th style="width: 130px">adresse</th>
<th style="width: 70px">telephone</th>
</tr>

<?php
if(isset($_POST['affiche'])){


$co= new clientC(); 
  $choisir=$co->recherche_client($_SESSION['cin']);
foreach($choisir as $row){
  
    ?>
  
    <tr>
<td><?PHP echo $row['nom']; ?></td>
<td><?PHP echo $row['prenom']; ?></td>
    <td><?PHP echo $row['email']; ?></td>
    <td><?PHP echo $row['cin']; ?></td>
  <td><?PHP echo $row['ville']; ?></td>
  <td><?PHP echo $row['adresse']; ?></td>
  <td><?PHP echo $row['telephone']; ?></td>
   
    
   
    </tr>
  </table>
    <?PHP
    }
    }
    
    ?>
 
       <h3 style="color: #bcba58 ; margin-left: 800px ; margin-top: 20px; ">Supprimer de votre profile </h3> 
       <div style="margin-left: 900px; margin-top: 20px"> 
<form action="" method="POST" >
     
<input type="submit" name="supprimer" value ='supprimer' id="supprimer">

</form>
</div>       

<div class="form-style-10" style="margin-left: 20px; margin-top: -200px" >
<h1>Modifier votre profile!<span>les champs ne sont pas tous obligatoire!</span></h1>
<form method="POST" action="">
    <div class="section"><span>1</span>First Name & Address</div>
    <div class="inner-wrap">
        <label>Your Full Name <input type="text" name="nom" id="nom" /></label>
        <label>Address <input type="text" name="adresse" id="adresse"></input></label>
    </div>

    <div class="section"><span>2</span>Phone</div>
    <div class="inner-wrap">
     
        <label>Phone Number <input type="text" name="telephone" id="telephone" /></label>
    </div>

    <div class="section" ><span>3</span>Passwords</div>
        <div class="inner-wrap">
        <label>Password <input type="password" name="cmdp" /></label>
        <label>Confirm Password <input type="password" name="cmdp2" /></label>
    </div>

     <div class="section" ><span>4</span>categorie</div>
        <div class="inner-wrap">
       
       <select id="categorie" name="categorie" else">

    <option value="client normal">client normal</option>
    <option value="hotel"   >hotel</option>
    <option value="societe">societe</option >
</select>    
    </div>

    <div class="button-section">
    <input type="text" name="cinn" placeholder="cin"> <input type="submit" name="smo" value="modifier" />
     <span class="privacy-policy">
    
     </span>
    </div>
</form>
</div>



<?php

if (isset($_POST['smo']) ){
   $telephone=$_POST["telephone"];
 $adresse=$_POST["adresse"];
$cmdp=$_POST["cmdp"];
$nom=$_POST["nom"];
 // extract($_POST);
  if(!empty($_POST["telephone"])){
    // clientC::modifierclient($_POST["cin"],"tel",$tel);
    $c= new clientC();
    $c->modifierclient($_POST["cinn"],"telephone",$telephone);
  }
  
  if(isset($_POST["adresse"])){
  if(!empty($_POST["adresse"])){
    $cp= new clientC();
    $cp->modifierclient($_POST["cinn"],"adresse",$adresse);
    // clientC::modifierclient($_POST["cin"],"adresse",$adresse);
      // $cc= new clientC();
      //   $cc->modifierclient($_POST["cin"],"adresse",$adresse);
  }
  }
  if(isset($_POST["cmdp"])){
  if(!empty($_POST["cmdp"])){

    $cp->modifierclient($_POST["cinn"],"cmdp",$cmdp);
    // clientC::modifierclient($_POST["cin"],"adresse",$adresse);
      // $cc= new clientC();
      //   $cc->modifierclient($_POST["cin"],"adresse",$adresse);
  }
  }
   if(isset($_POST["nom"])){
  if(!empty($_POST["nom"])){
  
    $cp->modifierclient($_POST["cinn"],"nom",$nom);
    // clientC::modifierclient($_POST["cin"],"adresse",$adresse);
      // $cc= new clientC();
      //   $cc->modifierclient($_POST["cin"],"adresse",$adresse);
  }
  }

}




$cccc= new clientC(); 
$lo=new categorieC();
if(isset($_POST['supprimer']))
{
  $cccc->supprimerclient($_SESSION['cin']);
  $lo->supprimercategorie($_SESSION['cin']);
require 
}
?>



<?php require '../web/footer.php'; ?>
