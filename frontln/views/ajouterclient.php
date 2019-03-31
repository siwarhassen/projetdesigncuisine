
<meta charset="utf8">

<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
        // $errors=array();

    } 
 ?>

<?php
include "../config.php";
include '../core/clientC.php';
// include 'mailConfirm.php';
 include '../core/categorieC.php';
// include 'confirmation.php';

$ccc= new clientC(); 
$cc= new clientC();

 $cat= new categorieC(); 
 $catego= new categorieC(); 

$errors=array();

$mdp=$_POST['mdp'];
$cin=$_POST['cin'];
$email=$_POST['email'];


$cinText=NULL;
$reqq="select cin from client where cin like '$cin' ";
$list=$ccc->conn->query($reqq);
$varo=$list->fetchAll();

$emailText=NULL;
$reqqq="select email from client where email like '$email' ";
$liste=$ccc->conn->query($reqqq);
$var=$liste->fetchAll();
// var_dump($emailText);	
foreach ($var as $v ) {

$emailText=$v[0];	

}
foreach ($varo as $vo ) {

$cinText=$vo[0];	

}
// var_dump($emailText);	
//
if($cin==$cinText){
	// echo "votre email";
	// echo"hhh";
	 // header('Location: ../compte.html?type=error&message=Cet e-mail est déjà enregistré '); 
// echo "<p>cet cin existe deja;

// </p>";
// header('Location:../compte.php'); 
	 // $errors['cin']="cet cin existe";
	 // header('Location: ../compte.php?type=error&message=Cet e-mail est déjà enregistré '); 
  // var_dump($errors);
  // header('Location:../compte.php'); 

 echo "<script type='text/javascript'>alert('cet cin existe deja');
 window.location='../web/compte.php';
</script>";
	 $errors['cin']="cet cin existe";
	 // header("Location: ../web/compte.php");

    exit;
}
else{
if($email==$emailText){
	// echo "votre email";
	 // header('Location: ../compte.html?type=error&message=Cet e-mail est déjà enregistré '); 
echo "<script type='text/javascript'>alert('cet email existe deja');
window.location='../web/compte.php';
</script>";

}

else{

//$_SESSION['cle']=$cle;
$_SESSION['email']=$email;
//var_dump($_POST['civ']);
//var_dump($cle);	

	
$longeurcle= 10 ;
$cle=0;

for ($i=1; $i <$longeurcle ; $i++)
 { 
	

	$cle.= mt_rand(0,9);
}
$cle=$cle;


$c1=new client($_POST['nom'],$_POST['prenom'],$email,$cin,$mdp,$_POST['adresse'],$_POST['ville'],$_POST['telephone'],$cle);	
$cat1=new Categorie($_POST['cin'],$_POST['categorie']);

// $message='../views/confirmation.php?email='.urlencode($email).'&cle='.$cle ;

// var_dump($c1);

  

//var_dump($ccc->insertClient($c1,$cc->conn));
if ($ccc->insertClient($c1,$cc->conn)  )
	
{
var_dump($cle);

if(isset($_POST['confirmer']))
  $cat->insertCategorie($cat1,$catego->conne);
			$to ='siwar.hassen@esprit.tn';
			//session_start();
			  $_SESSION['cin']=$_POST['cin'];
			 $_SESSION['nom']=$_POST['nom'];
			//  var_dump($_SESSION);
		

	if(!filter_var($to, FILTER_VALIDATE_EMAIL)){
		?>
		<br>
		<div class="alert alert-danger">
    		<strong>Warning !</strong> Enter the correct email.
  		</div>
  		<?php
	}
	else{
	
	



/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "siwar.hassen@esprit.tn";

//Password to use for SMTP authentication
$mail->Password = "ahlemsaidane";

//Set who the message is to be sent from
$mail->setFrom('siwar.hassen@esprit.tn', 'Design cuisine');

//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com', 'siwar hassen');

//Set who the message is to be sent to
$mail->addAddress('sisihassenn@gmail.com', 'siwar');

//Set the subject line
$mail->Subject = 'un nouveau client a fait un compte';
$nom=$_POST['nom'];
$cin=$_POST['cin'];
$message='
		<html>
				<head>
				  <meta charset="utf-8" />
				</head>
				<body>
				 <div>voici le cin: <b>'.$cin.'</b>,</div>
				
				 <td align="center">
							<font size="2">
							  consulter la pager pour voir les details.
							</font>
							<a href="localhost/designcuisine/AdminLTE-master/pages/tables/clientt.php">link</a>
				 </td>
				
				 				</body>
				</html>';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('<!DOCTYPE html><html><body>'.$message.'</body></html>');

//Replace the plain text body with one created manually
$mail->AltBody = 'higy';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors


//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.


















 echo "<script type='text/javascript'>alert('vous etes maintenant un membre');
window.location='../web/index.php';
</script>";
	
		// $header="MIME-Version : 1.0\r\n";
		// $header.='From:"PrimFX.com"<support@primfx.com>'."\n";
		// $header.='Content-Type:text/html;charset="uft-8"'."\n";
		// $header.='Content-Transfer-Encoding:8bit';
		// $message='<html><body><p>fretf</p></body></html>';


// $message  = 'Hi, you just received an email using sendmail!';
// $headers  = 'From: [your_gmail_account_username]@gmail.com' . "\r\n" .
//             'MIME-Version: 1.0' . "\r\n" .
//             'Content-type: text/html; charset=utf-8';
// 		mail('siwar.hassen@esprit.tn' , 'hi', $message, $headers);
//var_dump(mail('sisihassenn@gmail.com' ,'hi', $message, $headers));
//header('location:confirmation.php');

		// $message = 'http://localhost/frontLn/web/confirmation.php?email='.urlencode($email).'&cle='.$cle ;
		// $message = wordwrap($message, 70);
		// $headers = "From:" . $from;
		// $subject = "form submission";
		// mail($to , $subject, $message, $headers);
		// var_dump(mail('sisihassenn@gmail.com' , $subject, $message, $headers));

		?>
		<br>
		<div class="alert alert-success">
    		<strong>Success ! </strong> Mail send successfully.
  		</div>
  		<?php
		}
	}


	
	
	
}


}
function save_mail($mail) {
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}


//mail( "Confirmation de compte",$email, $message);
//var_dump($cle);
//var_dump($cle);
//var_dump($mail);


// header('Location: ../views/confirmation.php');
  


	# code...


//header('location:interfaceAjout.html');








// <!-- 
// <?php
//  // include "../core/clientC.php";
//  include "../config.php";
//$conn=mysql_connect("localhost","root","") or die(mysql_error());

//mysql_select_db("designcuisine",$conn) or die(mysql_error());

// $conn = mysqli_connect("localhost","root","","designcuisine");
// if (mysqli_connect_errno())
//  {
// printf("Échec de la connexion : %s\n", mysqli_connect_error());
// exit();
// }

// $dbh=mysqli_connect("localhost","root","","designcuisine");
 









