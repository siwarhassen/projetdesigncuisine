// function checkmail()
// {
// 	var mail=document.getElementById('mail').value;
// 	if(mail=="")
// 	{
// 		aler("YIKES");
// 	}
// 	else
// 	{
// 		window.location.replace("index.html")
// 	}

// }

function validateForm() {
  var x = document.forms["myForm"]["yesorno"].value;
  var n=x.indexOf("@");
  var w=x.indexOf('.');
  if ((n == -1) && (x!="")) {
    alert("The email that you entered is not valid");
    window.location.replace("index.html");
    return false;
  }
  else
  {
    // setTimeout("location.href = 'index.html';",5000);
    // window.location.replace("login.php");
  	// window.location.replace("index.html");
    // document.location.href="https//www.google.fr";
    // window.open('index.html');
      
  	return true;
  }
}