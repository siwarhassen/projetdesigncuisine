<?PHP
class client{
	
	private $nom;
	private $prenom;
	private $email;
	private $cin;
	private $mdp;
	private $adresse;
	private $ville;
    private $telephone;
    private $cle;
    
	
	function __construct($nom,$prenom,$email,$cin,$mdp,$adresse,$ville,$telephone,$cle)
	{
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->cin=$cin;
		$this->mdp=$mdp;
		$this->adresse=$adresse;
		$this->ville=$ville;
		$this->telephone=$telephone;
		$this->cle=$cle;
		
	}
function getcle()
    {
		return $this->cle;
	}

    function getnom()
    {
		return $this->nom;
	}

    function getprenom()
    {
		return $this->prenom;
	}

	function getemail()
	{
		return $this->email;
	}

	function getcin()
	{
		return $this->cin;
	}
	
	function getmdp()
	{
		return $this->mdp;
	}

    function getadresse()
    {
		return $this->adresse;
	}

    function getville()
    {
		return $this->ville;
	}

    function gettelephone(){
		return $this->telephone;
	}


	function setnom($nom)
	{
		$this->nom=$nom;
	}
	function setprenom($prenom)
	{
		$this->prenom;
	}
	function setemail($email)
	{
		$this->email=$email;
	}
	function setcin($cin)
	{
		$this->cin=$cin;
	}
	function setmdp($mdp)
	{
		$this->mdp=$mdp;
	}
	function setadresse($adresse)
	{
		$this->adresse=$adresse;
	}
	function setville($ville)
	{
		$this->ville=$ville;
	}
	function settelephone($telephone)
	{
		$this->telephone=$telephone;
	}


	
}

?>