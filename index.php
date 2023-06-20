<?php
class Genere {
    public $name = "";

    public function __construct($name)
    {
        $this->name = $name;
    }
}
class Movies
{   
    // DEFINISCO LE PROPRIETA'
	public $director="";
    public $year = 0;
    public $actors = [];
    public $length = 0;
    public $maincharacter="";
    public $genres = [];
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
        if (in_array("Tom Holland", $actors) || in_array("Russell Crowe", $actors)) {
            $this->maincharacter = $actors[0]; 
        }
    }
    // METODO PER DEFINIRE I GENERI
    public function setGenres($genres)
    {
        $this->genres = [];
        foreach ($genres as $genre) {
            if ($genre instanceof Genere) {
                $this->genres[] = $genre->name;
            }
        }
    }
// METODO PER DEFINIRE I MINUTI
function convertiDurataFilm($minutes) {
    $hours = floor($minutes / 60); 
    $minutesLeft = $minutes % 60;

    return $hours . "h " . $minutesLeft . "min";
}
//METODO PER INFO
public function getInfo(){
        $convertedLength = $this->convertiDurataFilm($this->length);
        $actors = implode(',', $this->actors);
        return  "Anno " .  $this->year ."<br>"."Durata Film: ". $convertedLength . "<br>". "Attori " .$actors ;
}
}
// ----------OGGETTO 1----------- 

// INSERIMENTO VALORI TRAMITE COSTRUTTORE 
$spiderman = new Movies(
    'Jon Watts',
    2021,
    148
);
// VARIABILE PER MINUTI  
 $convertedLenght = $spiderman->convertiDurataFilm($spiderman->length);

// INSERISCO ATTORI
$actors = ['Tom Holland', 'Zendaya', 'Willem Dafoe'];
// DEFINISCO ATTORI TRAMITE METODO
$spiderman->setActors($actors);
// DEFINISCO GENERE 
$genres = [
    new Genere('Action'),
    new Genere('Adventure'),
    new Genere('Fantasy')
];
$spiderman -> setGenres($genres)
?>
<!-- VISULIZZA A SCHERMO OGGETTTO 1 -->
<h1>Spiderman</h1>
<ul>
    <li><?php echo "Anno d'uscita: ".$spiderman->year ?></li>
    <li><?php echo "Durata Film: ". $convertedLenght; ?></li>
    <li><?php echo "Attori ". "<strong>" .implode(',', $spiderman->actors ). "</strong>" ?></li>
    <li><?php echo "Protagonista:". "<em>".  $spiderman->maincharacter ."</em>" ?></li>
</ul>
<!-- METODO PER VISUALIZZARE INFO TRAMITE METODO -->
<p><?php echo $spiderman->getInfo(); ?></p>
<p><?php echo implode(', ', $spiderman->genres); ?></p>




<!------------ OGGETTO 2  --------->
<?php  
$gladiatore = new Movies(
    'Ridley Scott',
    2000,
    155
);
// VARIABILE PER MINUTI  
$convertedLenght = $gladiatore->convertiDurataFilm($gladiatore->length);

// INSERISCO ATTORI
$actors = ['Russell Crowe','Joaquin Phoenix','Connie Nielsen'];
// DEFINISCOI ATTORI TRAMITE METODO
$gladiatore->setActors($actors);
// DEFINISCO GENERE 
$genres = [
    new Genere('Storical'),
    new Genere('Adventure'),
    new Genere('Winner Award')
];
$gladiatore -> setGenres($genres)
?>
<!-- VISULIZZA A SCHERMO OGGETTTO 2 -->
<h1>Gladiatore</h1>
<ul>
    <li><?php echo "Anno d'uscita: ".$gladiatore->year ?></li>
    <li><?php echo "Durata Film: ". $convertedLenght; ?></li>
    <li><?php echo "Attori: ". "<strong>" .implode(',', $gladiatore->actors ). "</strong>" ?></li>
    <li><?php echo "Protagonista:". "<em>".  $gladiatore->maincharacter ."</em>" ?></li>
</ul>
<!-- METODO PER VISUALIZZARE INFO TRAMITE METODO -->
<p><?php echo $gladiatore->getInfo(); ?></p>
<span></span>
<p><?php echo implode(', ', $gladiatore->genres); ?></p>


