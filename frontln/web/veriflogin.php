

<?php
session_start();

if(isset($_POST['login'])){
  $email=$POST['email'];
$password=$POST['password'];

$email=stripcslashes($mail);
$password=stripcslashes($password);
$email=mysql_real_escape_string($email);
$password=mysql_real_escape_string($password);




mysql_connect("localhost","root","");
mysql_select_db("designcuisine");
$result=mysql_query("select * from client where email='$email' and mdp='$password'");
$row=mysql_fetch_array($result);
if($row['email']==$email && $row['mdp']==$password )
{
  echo "bienvenue";

}
else
{
  echo "hijk";
}
}
?>



