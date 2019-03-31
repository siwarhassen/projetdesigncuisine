 <?php 

if(!isset($_SESSION)) 
    { 
        session_start(); 


    }
 ?> 

<!-- <?php  include 'functions.php';
?>
   <?php   if(isset($_SESSION['cin'])) :?>
                                        <li><a href="../web/deconnexion.php">se deconnecter</a></li>
                                       <li><a href="../web/modifierprofile.php">modifier</a></li>
                                        <?php else:?>
                                            <li>login</li>
                                            <li>creer compte</li>
                                        <?php endif; ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Design cuisine</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p>Bienvenue chez design cuisine <span class="mx-1"></span> !</p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Lun-Sam:<span class="mx-2"></span> 8.00 à 17.00 <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Contactez_nous:<span class="mx-2"></span> (+216)  25 889 988</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">

                        <!-- Logo -->
                      
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav"   >
                                <ul id="nav" style=" margin-top:40px" >
                                  <!--   <li> </span> <a href="./index.html"></a><input type="image" src="./img/core-img/home2.png"class="home"/></li> -->
                                    <!--<li class="active"><a href="./index.html">Home</a></li>-->
                                    <li  ><a href="#" >Produits</a>
                                        <ul class="dropdown">
                                            <li><a href="#">- Cuisine</a></li>
                                            <li><a href="#">- Dressing</a></li>
                                            <li><a href="#">- Porte</a></li>
                                            <li><a href="#">- Salle de bain</a></li>
                                            <li><a href="#">- Dropdown</a>
                                               <!--  <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul> -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li ><a href="portfolio.php">Portefeuille</a></li>
                                    <li><a href="#">Services</a>
                                    <ul class="dropdown">
                                            <li><a href="commande.php">- commande</a></li>
                                            <li><a href="#">- Livraison</a>
                                                <ul class="dropdown">
                                                    <li><a href="livraison.html">- livraison</a></li>
                                                    <li><a href="reclamation.html">- réclamation</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="about.php">présentation</a></li>
                                    <li><a href="contact.php">Contactez_nous</a></li>
                                    <li style="margin-left: -100px"> <input type="image" src="./img/core-img/cartee2.png" name=""></li>
                                  
                                    <li ><input type="image" src="./img/core-img/search2.png"  /></li>
                                    <li ><input type="image" src="./img/core-img/3bras2.png"/>
                                            <ul class="dropdown">
                                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i><span class="mx-2"></span> Facebook</a></li>
                                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i><span class="mx-2"></span> Twitter</a></li>
                                                <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i><span class="mx-2"></span> Google</a></li>
                                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i><span class="mx-2"></span> Instagram</a></li>
                                            </ul>          
                                    </li>
                                    <li ><input  type="image" src="./img/core-img/user2.png"  />
                                               <ul  class="dropdown"> 
                                                <?php  if(isset($_SESSION['cin'])) :?>
                                        <li><a href="modifierprofile.php">- modifier profile</a></li>
                                                      <li><a href="deconnexion.php">- deconnexion</a></li>
                                        <?php else:?>
                                            <li><a href="compte.php">- S'inscrire</a></li>
                                                    <li><a href="login.php">- Connecter</a></li>
                                        <?php endif; ?>
                                                  
                                                  
                                                </ul>
                                    </li>
                                      <a class="nav-brand" href="index.php"><img style="margin-top: 20px; margin-left:-20px"  class="logo" src="./img/core-img/_logo1.png" alt=""></a>

                              
                                </ul>
                                <!--search icon -->
                                    <!--<div id="searchIcon"> 
                                    <i class="icon_search" aria-hidden="true"> </i>
                                     </div>  -->
                                 <ul>
                                    
                                
                                 </ul>
                                <!-- Cart Icon -->
                                <!--<div class="cart-icon ml-5 mt-4 mt-lg-0">
                                    <a href="#"><i class="icon_cart"></i></a>
                                </div>-->
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                           <!-- Search Form -->
                       <!-- <div class="search-form">
                           <form action="#" method="get">
                                 <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                                     <button type="submit" class="d-none"></button>
                           </form>-->
                           <!-- Close Icon -->
                             <!--<div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i>
                             </div>
                        </div>-->

                </div>
            </div>
        </div>
    </header>
    