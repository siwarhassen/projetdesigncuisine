
<?php include 'header.php'; ?>

<?php
if(!empty($POST))
{

    $errors=array();

   var_dump($errors);
}
 ?>

<!--espace admin-->
<h2 class="espaceadmin">Espace Admin</h2>
<input type="email" name="email" placeholder="E-mail" class="emailadmin"><br>
<input type="password" name="" placeholder="mot de passe" class="mpadmin"><br>
<input type="submit" name="" value="connecter">
<!--espace admin-->
	
<!--debut creation compte client-->
	 <h2 class="creercompte">Espace client</h2>
	<form class="inscription"  method="POST" action="">
	<div id="message" class="champs">
		Tous les champs sont obligatoires
	</div><br>
	<input type="text" name="nom" id="nom" placeholder="votre nom" ><input type="text" name="prenom" id="prenom" placeholder="votre prenom" class="prenominscri" required="required"><br><br>
	
	<input type="text" name="cin" id="cin" placeholder="votre cin" pattern="(.){8,8}" maxlength="8" required="required" ><input type="email" name="email" id="email" placeholder="votre email" class="emailinscri"  data-error="Bruh, that email address is invalid"  required="required" ><br><br>
	
	
		<label class="mpinscri1">votre mot de passe</label><span></span><label class="mpinscri2">confirmer votre mot de passe</label><br>
	<input type="password" name="mdp" id="mdp" class="mpinscri" required="required" data-minlength="6">
			<input type="password" name="mdp" id="mdp2" class="mpinscri3" required="required" data-minlength="6"><br><br>



	<select id="categorie" name="categorie" class="categorieinscri" id="categorie" onchange="javascript:if(this.value>0){b_categorie=true} else{b_categorie=false;}">
		<option value="0">Catégorie</option>
		<option value="1">client normal</option>
		<option value="2">hotel</option>
		<option value="3">societe</option >

	</select >

	<select id="ville" name="ville" class="ville" id="ville" onchange="javascript:if(this.value>0){b_ville=true} else{b_ville=false;}"> 
		<option value="0">ville</option>
		<option value ="1">Bizerte</option>
		<option value="2">Ariana</option>
		<option value="3">Sousse</option>
		<option value="4">Monastir</option>
		<option value="5">Sfax</option>
		<option value="6">Mahdia</option>
		<option value="7">kairouan</option>
		<option value="8">Gabes</option>
		<option value="9">Gafsa</option>
		<option value="10">Ben Arous</option>
		<option value="11">Kasserine</option>
		<option value="12">Médenine</option>
		<option value="13">Nabeul</option>
		<option value="14">Tataouine</option>
		<option value="15">Beja</option>
		<option value="16">Le Kef</option>
		<option value="17">Sidi Bouzid</option>
		<option value="18">Jendouba</option>
		<option value="19">Tozeur</option>
		<option value="20">La Manouba</option>
		<option value="21">Sliana</option>
		<option value="22">Zaghouan</option>
		<option value="23">Kébili</option>
		<option value="24">Tunis</option>
	</select><br><br>

	<input type="adresse" name="adresse" id="adresse" class="adresseinscri" placeholder="adresse" required="required" >

<input type="text" name="telephone" id="telephone" placeholder="telephone" class="telephoneinscri" pattern="(.){8,8}" maxlength="8" required="required"><br><br>
<input type="checkbox" name="je suis ok" id="case" required="required" >
<label> j'accepte les condtitions</label ><br>

<span id="erreur" style="color: red;"></span><br>
<input type="submit" name="confirmer" value="confirmer" id="confirmer"  onclick="envoyer()">



</form>



<!-- <?php if(!empty($errors)):?>
    <div>
        <p>thabat fel cin</p>
<?php foreach ($errors as $error ) :?>
    <?php endforeach; ?>
    </div>
<?php endif; ?> -->



<script src="compte.js">
   
    </script>


<?php include 'footer.php'; ?>


