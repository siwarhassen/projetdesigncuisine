<?php 
require "header.php";
?>

<div class="form-style-5" style="margin-left: 20px">
<form action="" method="POST">
<fieldset>
<legend><span class="number"></span> Se connecter</legend>

<input type="text" name="cin" id="email" maxlength="8" placeholder="Votre cin"><br>
<input type="password" name="password" placeholder="password">
</fieldset>
<input type="submit" name="login" value="login" >
</form>
</div>




<?php
require "footer.php";
?>
<?php


$bdd = new PDO('mysql:host=127.0.0.1;dbname=designcuisine', 'root', '');

if(isset($_POST['login'])) { 
   $cin = htmlspecialchars($_POST['cin']);
   $password = ($_POST['password']);
   if(!empty($cin) AND !empty($password)) 
   
{
      $requser = $bdd->prepare("SELECT * FROM client WHERE cin =$cin and mdp ='$password' ");
      $requser->execute();
      $userexist = $requser->rowCount();
      if($userexist == 1) 
      
      {
         $userinfo = $requser->fetch();

         $_SESSION['cin'] = $userinfo['cin'];
         $_SESSION['nom'] = $userinfo['nom'];
    echo "<script type='text/javascript'>alert('Bienvenue ');
window.location='index.php';
</script>";
          }
         else { 
                    
               session_destroy();
                     echo "<script type='text/javascript'>alert('incorrecte ');

</script>";
                           }
      

     
     
    
      
}
   
}

?>






