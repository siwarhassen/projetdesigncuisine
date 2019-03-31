var b_nom=false; var b_mp=false; var b_categorie=false ; var b_ville=false; var b_mdp2=false; var b_prenom=false; var b_email=false; var b_telephone;


var erreur;
function envoyer()
{ 
  if(b_categorie==true)
  {  

document.getElementById('erreur').innerText = '';
document.getElementById('categorie').style.border = '#333 1px solid';
  }
else
{  document.getElementById('erreur').innerText = 'tu dois choisir une categorie';
document.getElementById('categorie').style.border = '#CC3300 2px solid';
  
}

 if(b_ville==true)
  {  

document.getElementById('erreur').innerText = '';
document.getElementById('ville').style.border = '#333 1px solid';

  }
else
{ 
 document.getElementById('erreur').innerText = 'tu dois choisir une ville';
 document.getElementById('ville').style.border = '#CC3300 2px solid';

  
}

if(document.getElementById('telephone').value=="")
{  document.getElementById('telephone').style.border = '#CC3300 2px solid';
b_telephone=false;
}
else
{ document.getElementById('telephone').style.border = '#333 1px solid';
b_telephone=true;
}
// if(document.getElementById('telephone').value===8)
// {   document.getElementById('telephone').style.border = '#333 1px solid';
// b_telephone=true;
// }
// else
// { document.getElementById('telephone').style.border = '#CC3300 2px solid';

// b_telephone=false;
// }
    





if(document.getElementById('nom').value=="")
{  document.getElementById('nom').style.border = '#CC3300 2px solid';
b_nom=false;
}
else
{document.getElementById('nom').style.border = '#333 1px solid';
b_nom=true;
}
if(document.getElementById('email').value=="")
{  document.getElementById('email').style.border = '#CC3300 2px solid';
b_email=false;
}
else
{document.getElementById('email').style.border = '#333 1px solid';
b_email=true;
}
if(document.getElementById('prenom').value=="")
{  document.getElementById('prenom').style.border = '#CC3300 2px solid';
b_prenom=false;
}
else
{document.getElementById('prenom').style.border = '#333 1px solid';
b_prenom=true;
}

if(document.getElementById('mdp2').value != document.getElementById('mdp').value)
{
document.getElementById('mdp2').style.border = '#CC3300 2px solid';
document.getElementById('mdp').style.border = '#CC3300 2px solid';
document.getElementById('erreur').innerText = 'Les mots de passe doivent être identiques';
b_mdp2=false;
}
 else
{
document.getElementById('erreur').innerText = '';
document.getElementById('mdp').style.border = '#333 1px solid';
document.getElementById('mdp2').style.border = '#333 1px solid';
b_mdp2=true;
}

 if(b_ville==true && b_categorie==true && b_mdp2==true  && b_nom==true && b_prenom==true && b_email==true)
{
// alert ('formulaire envoyé');

}
else
{
document.getElementById('erreur').innerText = 'Le formulaire nst pas complet';

}
//   var nom=document.getElementById(nom);
//   if(!nom)
// }
// function mev(txt_defaut,nom_controle)
// {
// else if(nom_controle=='mdp')
// {
// if(document.getElementById(nom_controle).value.length < 5 || document.getElementById(nom_controle).value.length > 10)
// {
// document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
// document.getElementById('message').innerText = 'Le mot de passe doit comporter entre 5 et 10 caractères';
// b_mp=false;
// }
// else
// {
// document.getElementById('message').innerText = '';
// document.getElementById(nom_controle).style.border = '#333 1px solid';
// }
// }
// else if(nom_controle=='mdp2')
// {
// if(document.getElementById(nom_controle).value != document.getElementById('mp_inscr').value)
// {
// document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
// document.getElementById('message').innerText = 'Les mots de passe doivent être identiques';
// b_mp=false;
// }
// else
// {
// document.getElementById('message').innerText = '';
// document.getElementById(nom_controle).style.border = '#333 1px solid';
// b_mp=true;
// }
// }

}



// Affichage d'un message contextuel pour la saisie du pseudo

//  var b_categorie ;
//      function envoyer()
//      {  if(b_categorie===true)
//         {
//             document.getElementById("erreur").innerText ="err";
        
//         }
// else 
// {
//     document.getElementById("erreur").innerText="jof";
// }


//      }





// var formValid =document.getElementById('confirmer');
// var nom =document.getElementById('nom');
// var erreur=document.getElementById('erreur');



// formValid.addEventListener('click',validation);


// function validation(event)
// {
//   if (nom.validity.valueMissing)
//   {
//     event.preventDefault();
//     erreur.textContent='ho';
//     erreur.style.color='red';
    
//   }
// }







//  function verif(){

 
//   var erreur;
// //  // var nom= document.getElementById("nom");
// //  // var prenom=document.getElementById("prenom");
// //  // var cin=document.getElementById("cin");
// //  // var email=document.getElementById("email");
// //  // var mdp=document.getElementById("mdp");
// //  // var mdp2=document.getElementById("mdp2");
// //  //  var adresse=document.getElementById("adresse");
// //  //   var telephone=document.getElementById("telephone");
// //  //  var categorie=document.getElementById("categorie");
// //  //   var ville=document.getElementById("ville");
  
// // var inputs=this;
// // if(document.getElementById("telephone").value ===8)
// // {
// // //  { erreur="wouuh";
// // // document.getElementById("erreur").innerHTML=erreur;
// //  alert("La categorie doit commencer par une lettre majuscule.");
// //             return false;
// // }

// // else
// // {  alert("jjjj");
// //   return true;
//  }
//  };

// document.getElementById("mdp").addEventListener("submit", function (e) {
//     var mdp = e.target.value; // Valeur saisie dans le champ mdp
//     var longueurMdp = "faible";
//     var couleurMsg = "red"; // Longueur faible => couleur rouge
//     if (mdp.length >= 8) {
//         longueurMdp = "suffisante";
//         couleurMsg = "green"; // Longueur suffisante => couleur verte
//     } else if (mdp.length >= 4) {
//         longueurMdp = "moyenne";
//         couleurMsg = "orange"; // Longueur moyenne => couleur orange
//     }
//     var aideMdpElt = document.getElementById("aideMdp");
//     aideMdpElt.textContent = "Longueur : " + longueurMdp; // Texte de l'aide
//     aideMdpElt.style.color = couleurMsg; // Couleur du texte de l'aide
// });


// var myForm = document.getElementById('inscription');
  
//     myForm.addEventListener('submit', function(e) {
//        var erreur;
//        var inputs=this;
//        var nom= document.getElementById("nom");
//        if(!nom.value)
//         {erreur="ggg";}
// if(erreur)
// { e.preventDefault();
//   document.getElementById("erreur").innerHTML=erreur;
//     alert("jjj");
//   }
//        else
//        {
//         alert("jjj");
//        }
//     });
  
//     myForm.addEventListener('reset', function(e) {
//         alert('Vous avez réinitialisé le formulaire !');
//     });
// Handle form
// form.addEventListener('submit', function(event) {
//   // Prevent default behaviour
//   event.preventDefault();
//   if (
//     validateFirstName() &&
//     validateLastName() &&
//     validatePassword() &&
//     validateConfirmPassword() &&
//     validateEmail()
//   ) {
//     const name = firstName.value;
//     const container = document.querySelector('div.container');
//     const loader = document.createElement('div');
//     loader.className = 'progress';
//     const loadingBar = document.createElement('div');
//     loadingBar.className = 'indeterminate';
//     loader.appendChild(loadingBar);
//     container.appendChild(loader);
//     setTimeout(function() {
//       const loaderDiv = document.querySelector('div.progress');
//       const panel = document.createElement('div');
//       panel.className = 'card-panel green';
//       const text = document.createElement('span');
//       text.className = 'white-text';
//       text.appendChild(
//         document.createTextNode(
//           `Sign up successful, welcom to SocialApe ${name}`
//         )
//       );
//       panel.appendChild(text);
//       container.replaceChild(panel, loaderDiv);
//     }, 1000);
//   }
// });

// Validators
// function validateFirstName() {
//   // check if is empty
//   if (checkIfEmpty(nom)) return;
//   // is if it has only letters
//   if (!checkIfOnlyLetters(nom)) return;
//   return true;
// }
// function validateLastName() {
//   // check if is empty
//   if (checkIfEmpty(lastName)) return;
//   // is if it has only letters
//   if (!checkIfOnlyLetters(lastName)) return;
//   return true;
// }
// function validatePassword() {
//   // Empty check
//   if (checkIfEmpty(password)) return;
//   // Must of in certain length
//   if (!meetLength(password, 4, 100)) return;
//   // check password against our character set
//   // 1- a
//   // 2- a 1
//   // 3- A a 1
//   // 4- A a 1 @
//   //   if (!containsCharacters(password, 4)) return;
//   return true;
// }
// function validateConfirmPassword() {
//   if (password.className !== 'valid') {
//     setInvalid(confirmPassword, 'Password must be valid');
//     return;
//   }
//   // If they match
//   if (password.value !== confirmPassword.value) {
//     setInvalid(confirmPassword, 'Passwords must match');
//     return;
//   } else {
//     setValid(confirmPassword);
//   }
//   return true;
// }
// function validateEmail() {
//   if (checkIfEmpty(email)) return;
//   if (!containsCharacters(email, 5)) return;
//   return true;
// }
// // Utility functions
// function checkIfEmpty(field) {
//   if (isEmpty(field.value.trim())) {
//     // set field invalid
//     setInvalid(field, `${field.name} must not be empty`);
//     return true;
//   } else {
//     // set field valid
//     setValid(field);
//     return false;
//   }
// }
// function isEmpty(value) {
//   if (value === '') return true;
//   return false;
// }
// function setInvalid(field, message) {
//   field.className = 'invalid';
//   field.nextElementSibling.innerHTML = message;
//   field.nextElementSibling.style.color = red;
// }
// function setValid(field) {
//   field.className = 'valid';
//   field.nextElementSibling.innerHTML = '';
//   //field.nextElementSibling.style.color = green;
// }
// function checkIfOnlyLetters(field) {
//   if (/^[a-zA-Z ]+$/.test(field.value)) {
//     setValid(field);
//     return true;
//   } else {
//     setInvalid(field, `${field.name} must contain only letters`);
//     return false;
//   }
// }
// function meetLength(field, minLength, maxLength) {
//   if (field.value.length >= minLength && field.value.length < maxLength) {
//     setValid(field);
//     return true;
//   } else if (field.value.length < minLength) {
//     setInvalid(
//       field,
//       `${field.name} must be at least ${minLength} characters long`
//     );
//     return false;
//   } else {
//     setInvalid(
//       field,
//       `${field.name} must be shorter than ${maxLength} characters`
//     );
//     return false;
//   }
// }
// function containsCharacters(field, code) {
//   let regEx;
//   switch (code) {
//     case 1:
//       // letters
//       regEx = /(?=.*[a-zA-Z])/;
//       return matchWithRegEx(regEx, field, 'Must contain at least one letter');
//     case 2:
//       // letter and numbers
//       regEx = /(?=.*\d)(?=.*[a-zA-Z])/;
//       return matchWithRegEx(
//         regEx,
//         field,
//         'Must contain at least one letter and one number'
//       );
//     case 3:
//       // uppercase, lowercase and number
//       regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
//       return matchWithRegEx(
//         regEx,
//         field,
//         'Must contain at least one uppercase, one lowercase letter and one number'
//       );
//     case 4:
//       // uppercase, lowercase, number and special char
//       regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/;
//       return matchWithRegEx(
//         regEx,
//         field,
//         'Must contain at least one uppercase, one lowercase letter, one number and one special character'
//       );
//     case 5:
//       // Email pattern
//       regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//       return matchWithRegEx(regEx, field, 'Must be a valid email address');
//     default:
//       return false;
//   }
// }
// function matchWithRegEx(regEx, field, message) {
//   if (field.value.match(regEx)) {
//     setValid(field);
//     return true;
//   } else {
//     setInvalid(field, message);
//     return false;
//   }
// }

















// function envoyer()
// {
// 	var categorie=false ;var nom=false ;var prenom=false;var email=false ;var telephone=false;var adresse=false;var mp=false;var cin=false;
// // 
// }

// function verif_formulaire(form) 
// {  


//  // if(document.getElementById("p").value == "") { 
//  // alert("Veuillez entrer votre prenom!"); 
//  // document.getElementById("p").focus(); 
//  // return false; 
//  // } 


//  // // if(document.getElementById("nom").value == "") { 
//  // alert("Veuillez entrer votre nom!"); 
//  // document.getElementById("nom").focus(); 
//  // return false; 
//  // } 

//  // if(document.getElementById("email").value == "") { 
//  // alert("Veuillez entrer votre adresse électronique!"); 
//  // document.getElementById("email").focus(); 
//  // return false; 
//  // } 
//  // if(document.getElementById("email").value.indexOf('@') == -1) { 
//  // alert("Il y a une erreur à votre adresse électronique!"); 
//  // document.formulaire.Email.focus(); 
//  // return false; 
//  } 
// var chkZ = 1; 
// for(i=0;i<document.getElementById("telephone").value.length;++i) 
// if(document.getElementById("telephone").value.charAt(i) < "0" 
// || document.getElementById("telephone").value.charAt(i) > "9") 
// chkZ = -1; 
// if(chkZ == -1) { 
// alert("Votre téléphone doit contenir que des nombres!"); 
// document.getElementById("telephone").focus(); 
// return false;
// // else 
// {
// 	return true;
// } 
// }  




// if(document.getElementById("adresse").value == "") { 
// alert("Veuillez entrer votre adresse!"); 
// document.getElementById("adresse").focus(); 
// return false; 
// }


// if(document.getElementById("categorie").options[0].selected ) { 
// alert("Veuillez entrer votre categorie!"); 
// document.getElementById("adresse").focus(); 
// return false; 
// }
// if(document.getElementById("ville").options[0].selected ) { 
// alert("Veuillez entrer votre ville!"); 

// return false; 
// }




// if (document.getElementById("case").checked == false )
// // C'est ici que l'on regarde si la case a été cochée.
// // Ca se présente sous la forme :
// // nom-formulaire.nom-checkbox.cochée == Ben non
//     {
//     alert('Vous devez cocher la case avant de continuer.');
// // Si c'est le cas on y dit au visiteur kil fô qu'il coche
//     return false;

//     }
//   else
// // Sinon...
//     {
//     alert('Merci ');
//     }

  








// }



