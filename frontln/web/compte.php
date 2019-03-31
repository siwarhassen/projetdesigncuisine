
<?php
include "header.php";
?>


<!-- <?php if(!empty($errors)):?>
    <div>
        <p>thabat fel cin</p>
<?php foreach ($errors as $error ) :?>
    <?php endforeach; ?>
    </div>
<?php endif; ?>

 -->
<!--espace admin-->
<h2 class="espaceadmin" style="color: #bcba58">Espace Admin</h2>
<div class="form-style-5" style="margin-left: 20px">
<form action="" method="post">
<fieldset>
<legend><span class="number"></span> Se connecter</legend>

<input type="email" name="field2" placeholder="Your Email *">
<input type="text" name="field1" placeholder="Your password *">
</fieldset>
<input type="submit" value="connecter" name="connecter" />
</form>
</div>


<!--espace admin-->
	
 <h2  style="color: #bcba58 ; margin-top: -375px ;margin-left:900px ">Espace client</h2>
<div class="form-style-7" style="margin-left: 600px">
<form  method="POST" action="../views/ajouterclient.php" >
<fieldset>
<legend><span class="number">1</span> Informations</legend>
<input type="text" name="nom" id="nom" placeholder="Your Name *" style="width: 200px" required="required"><input style="margin-left: 250px; margin-top: -160px ; width: 200px" type="text" name="prenom" id="prenom" placeholder="Ton Prenom *" required="required">
<input type="email" name="email" id="email" placeholder="Your Email *" required="required">

<label for="job">Interests:</label>
<select id="categorie" name="categorie" onchange="javascript:if(this.value!='categorie'){b_categorie=true} else{b_categorie=false;}">
<option value="categorie" >Catégorie</option>
		<option value="client normal">client normal</option>
		<option value="hotel">hotel</option>
		<option value="societe">societe</option >
</select>      
</fieldset>
<fieldset>
<legend><span class="number">2</span> Adresse</legend>

<select id="job" name="ville" id="ville" onchange="javascript:if(this.value>0){b_ville=true} else{b_ville=false;}">

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
</select>  
<input type="text" name="adresse" id="adresse" placeholder="Ton adresse" required="required">
</fieldset>
<fieldset>
<legend><span class="number">2</span>contact</legend>
<input type="text" name="telephone" id="telephone" placeholder="Ton telephone" pattern="(.){8,8}" maxlength="8" style="width: 200px" required="required"><input style="margin-left: 250px ; width: 200px "type="text" name="cin" id="cin" placeholder="Ton cin" pattern="(.){8,8}" maxlength="8" required="required">

</fieldset>
</fieldset>
<fieldset>
<legend><span class="number">2</span>password</legend>
<input type="password" name="mdp" id="mdp" placeholder="Ton mot de passe" style="width: 200px" required="required"><input style="margin-left: 250px ; width: 200px "type="password" name="mdp" id="mdp2" placeholder="confirmer votre mot de passe">

</fieldset>
<span id="erreur" style="color: red;"></span><br>
<input type="submit" value="confirmer" id="confirmer" name="confirmer" onclick="envoyer()" />
</form>
</div>












<!--debut creation compte client-->
	




	<!-- <form class="inscription"  method="POST" action="../views/ajouterclient.php" > -->

	<!-- <input type="text" name="nom" id="nom" placeholder="votre nom" > --><!-- <input type="text" name="prenom" id="prenom" placeholder="votre prenom" class="prenominscri" required="required"><br><br> -->
	
	<!-- <input type="text" name="cin" id="cin" placeholder="votre cin" pattern="(.){8,8}" maxlength="8" required="required" ><input type="email" name="email" id="email" placeholder="votre email" class="emailinscri"  data-error="Bruh, that email address is invalid"  required="required" ><br><br>
	 -->
	
		<!-- <label class="mpinscri1">votre mot de passe</label><span></span><label class="mpinscri2">confirmer votre mot de passe</label><br> -->
<!-- 	<input type="password" name="mdp" id="mdp" class="mpinscri" required="required" data-minlength="6">
			<input type="password" name="mdp" id="mdp2" class="mpinscri3" required="required" data-minlength="6"><br><br> -->



<!-- 	<select id="categorie" name="categorie" class="categorieinscri" id="categorie" onchange="javascript:if(this.value!='categorie'){b_categorie=true} else{b_categorie=false;}">
		<option value="categorie" >Catégorie</option>
		<option value="client normal">client normal</option>
		<option value="hotel">hotel</option>
		<option value="societe">societe</option >

	</select > -->

<!-- 	<select id="ville" name="ville" class="ville" id="ville" onchange="javascript:if(this.value>0){b_ville=true} else{b_ville=false;}"> 
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
 -->
<!-- 	<input type="adresse" name="adresse" id="adresse" class="adresseinscri" placeholder="adresse" required="required" > -->

<!-- <input type="text" name="telephone" id="telephone" placeholder="telephone" class="telephoneinscri" pattern="(.){8,8}" maxlength="8" required="required"><br><br> -->

<!-- <span id="erreur" style="color: red;"></span><br>
<input type="submit" name="confirmer" value="confirmer" id="confirmer"  onclick="envoyer()"> -->





<script src="compte.js">
   
    </script>


<?php include 'footer.php'; ?>


