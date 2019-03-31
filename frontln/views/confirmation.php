<!-- <!-- <!-- 
<?php

 $cc = new PDO('mysql:host=127.0.0.1;dbname=designcuisine', 'root', '');


if(isset($_GET['email'], $_GET['cle']) AND !empty($_GET['email']) AND !empty($_GET['cle'])) {
   $email = htmlspecialchars(urldecode($_GET['email']));
   $cle = htmlspecialchars($_GET['cle']);
   $requser = $cc->prepare("SELECT * FROM client WHERE email = ? AND cle = ?");
   $requser->execute(array($email, $cle));
   $userexist = $requser->rowCount();
   if($userexist == 1) {
      $user = $requser->fetch();
      if($user['confirm'] == 0) {
         $updateuser = $cc->prepare("UPDATE client SET confirm = 1 WHERE email = ? AND cle = ?");
         $updateuser->execute(array($email,$cle));
         	
?>
         <div class="alert alert-Success">
  <p>Votre compte a bien été confirmé !</p>
</div>
<?php
         
      } else {
      	?>
         <div class="alert alert-Info">
  <p>Votre compte a déjà été confirmé !</p>
</div>
<?php
      }
   } else {
      ?>
         <div class="alert alert-Danger">
  <strong>L'utilisateur n'existe pas !</strong>
</div>
<?php
   }
}
?> --> --> -->

<?php session_start(); 
$name=$_SESSION['cin'];


?>
<?php require '../web/header.php'; ?>


<h1>votre commpte <?php echo $name ; ?> </h1>

<!--  -->


<?php require '../web/footer.php'; ?>