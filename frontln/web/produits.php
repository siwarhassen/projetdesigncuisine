<?php
require "header.php";
?>




<!--Product Start-->


<center><h1>WORKING ON PRODUCTS PLEASE WAIT</h1></center>
<div class="filtrer">
	<div class="filtertype">
	<h4>Filtrer par type:</h4>
	<input type="checkbox" name="Cuisine" value="Type"> <label>Cuisine</label> <br/>
	<input type="checkbox" name="SAM" value="Type"> <label>Salle à manger</label><br/>
	<input type="checkbox" name="SDB" value="Type"> <label>Salle de bain</label><br/>
	</div>
	<div class="trier">
	<h4>Trier par :</h4>
	<input type="checkbox" name="nom"><label>Nom</label><br/>
	<input type="checkbox" name="prix"><label>Prix</label><br/>
	</div>
	<div class="prix">
	<h4>Prix :</h4>
	 Prix Min <input type="number" name="prixmin" class="price"> Prix Max<input type="number" name="prixmax" class="price">
	</div>
	<button class="searchfilter">Chercher</button>
		
	</div>

</div>


<div class="produit">
	<hr/>
	<img src="100.jpg" height="200px" width="200px" class="photoproduit"/>
	<h3 class="nomproduit">Chaise haute</h3>
	<a href="#"><p class="type">Cuisine</p></a>
	<p class="descriptionp">Description : </p>
	<p class="descriptionproduit">Ceci est un produit tres tres lux  et tres tres cher Ceci est un produit tres tres lux  et tres tres cher Ceci est un produit tres tres lux  et tres tres cher Ceci est un produit tres tres lux  et tres tres cher Ceci est un produit tres tres lux  et tres tres cher </p>
	<p class="prixproduit">230 DT</p>
	<!-- <button>Ajouter au panier</button> -->
	<div class="ajouterpanier">
		<p class="textpanier">Ajouter au panier</p>
		<img src="chart.png" class="addchart" width="10px" height="10px">

	</div>

	<hr/>
</div>


<!--Product End-->
 <?php
require "footer.php";
?>