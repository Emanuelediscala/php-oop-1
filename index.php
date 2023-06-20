<?php
class Movies
{   
    // DEFINISCO LE PROPRIETA'
	public $director="";
    public $year = 0;
    public $actors = [];
    public $length = 0;
    public $maincharachter="";
    // IMPOSTO IL COSTRUTTORE
	public function __construct($director, $year, $length)
	{
		$this->director = $director;
		$this->year = $year;
		$this->length = $length;
	}
    // METODO PER DEFINIRE GLI ATTORI ED EVENTUALE PROTAGONISTA
    public function setActors($actors)
{
    $this->actors = $actors;
    if (in_array("Tom Holland",$actors)) {
            $this->maincharachter = "Tom Holland";
    }
}
}
// ----------OGGETTO 1----------- 

// INSERIMENTO VALORI TRAMITE COSTRUTTORE 
$spiderman = new Movies(
    'Mario Rossi',
    2002,
    80.35
);
// INSERISCO ATTORI
$actors = ['Tom Holland', 'Zendaya', 'Willem Dafoe'];
// INSERISCO ATTORI TRAMITE METODO
$spiderman->setActors($actors);
?>
<!-- VISULIZZA A SCHERMO OGGETTTO 1 -->
<h1>Spiderman</h1>
<?php echo '<br>'."Anno d'uscita ".$spiderman->year; ?>

<!------------ OGGETTO 2  --------->
