<?PHP

include '../entities/categorie.php';
class categorieC {
    public $conne;
    function __construct()
	{ 
		$co=new config();
		$this->conne=$co->getConnexion();
	}
	
      function insertCategorie($categorie,$conne){

		$req1="INSERT INTO CATEGORIE (CIN,TYPE)
		VALUES ('".$categorie->getcin()."','".$categorie->gettype()."')";
		if($conne->query($req1)){

			return true;}
	}



	function affichercategories()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);   //pour dire que tu dois executer 
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}




function affichercategorie ($categorie)
    {
		echo "cin: ".$categorie->getcin()."<br>";
		echo "type: ".$categorie->gettype()."<br>";
	
	
	}
	
	
	function supprimercategorie($cin){
		$sql="DELETE FROM categorie where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListecategories($type){
		$sql="SELECT * from categorie where type=:type";
		$db = config::getConnexion();
		 $req=$db->prepare($sql);
		$req->bindValue(':type',$type);
		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recherche_categorie($rech){

        $db=config::getConnexion();
        $sql=" select * from categorie where type like '%$rech%' ";

        $list=$db->query($sql);
        return $list;


    }

function nombrecategorie(){   //nombre de societe 

       
    
     $con=mysqli_connect("localhost","root","","designcuisine");
     $result=mysqli_query($con," SELECT type from categorie where type='societe'  ");

$row=mysqli_num_rows($result);

       return $row;


    }
    function nombrecategoriecnor(){  // nombre client normal

       
    
     $con=mysqli_connect("localhost","root","","designcuisine");
     $result=mysqli_query($con," SELECT type from categorie where type= 'client normal'  ");

$rows=mysqli_num_rows($result);

      return $rows;

    }
    function nombrecategoriehotel(){  //nombre hotel

       
    
     $con=mysqli_connect("localhost","root","","designcuisine");
     $result=mysqli_query($con," SELECT type from categorie where type='hotel'  ");

$rows=mysqli_num_rows($result);
return $rows;
       


    }



     function nombretotal(){
       
    $con=mysqli_connect("localhost","root","","designcuisine");
     $resulte=mysqli_query($con," SELECT type from categorie ");

$rows=mysqli_num_rows($resulte);
return $rows;
       


    }
     function calcul_pourcentage()
    { 
  $con=mysqli_connect("localhost","root","","designcuisine");
     $resulte=mysqli_query($con," SELECT type from categorie ");

     $rows=mysqli_num_rows($resulte);
 $result=mysqli_query($con,"  SELECT type from categorie where type like 'societe'  ");
     $row=mysqli_num_rows($result);
     $l=($row/$rows)*100;
     return round($l);
    } 

}

?>