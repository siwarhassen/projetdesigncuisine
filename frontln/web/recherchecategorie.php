





<?php include '../core/categorieC.php';
    include  '../core/clientC.php';
  ?>
<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Table des Commandes</h3>
                </div>
                        <table border="1"  id="example2" class="table table-bordered table-hover">
                            <form action="" method="POST">
                            Rechercher: <input type="text" name="recherche">
                                        <input type="submit" name= "recherche_b" value="Rechercher"> 

                            </form>
                           
                           <div class="box-body">
                               <tr> <br>
                               <td>type</td>
                               <td>cin</td>
                              
                               </tr>
                           </div>

<?PHP
$cccc= new categorieC(); 
	$listeCategorie=$cccc->recherche_categorie($_POST['recherche']);
	?>
	<?php
if(isset($_POST['recherche_b'])){


foreach($listeCategorie as $row){
	
    ?>
    <tr>
    <td><?PHP echo $row['type']; ?></td>
    <td><?PHP echo $row['cin']; ?></td>
   
    
   
    </tr>
    <?PHP
    }
    }
    
    ?>





<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Table des clients/h3>
                </div>
                        <table border="1"  id="example2" class="table table-bordered table-hover">
                            <form action="" method="POST">
                            Rechercher: <input type="text" name="cherchee">
                                        <input type="submit" name= "recherche_c" value="recherche client"> 

                            </form>
                           
                           <div class="box-body">
                               <tr> <br>
                               <td>nom</td>
                               <td>prenom</td>
                               <td>email</td>
                               <td>telephone</td>
                                <td>adresse</td>
                                 <td>ville</td>

                               </tr>
                           </div>
<?PHP
$cli= new clientC(); 
	$listeClient=$cli->recherche_client($_POST['cherchee']);
	?>
	<?php  
if(isset($_POST['recherche_c'])){


foreach($listeClient as $row){
	
    ?>
    <tr>

    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['prenom']; ?></td>
   
     <td><?PHP echo $row['email']; ?></td>
    <td><?PHP echo $row['telephone']; ?></td>
    <td><?PHP echo $row['adresse']; ?></td>
    <td><?PHP echo $row['ville']; ?></td>
   
   
    </tr>
    <?PHP
    }
    }
    $name="societe";
    $c= new categorieC(); 
     $li=$c->nombretotal();
     $lo=$c->nombrecategoriecnor();

$mp=round(($lo*100)/$li);
print_r($mp);
   ?>
     
     
    
