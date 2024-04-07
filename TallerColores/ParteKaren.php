<!DOCTYPE html>
<html>
<body>

<?php
class Conejo{
//Atributoos
	var $edad;
    var $color;
    var $genero;
    var $nombre;
    
//Constructor
	function Conejo($e,$c,$g,$n){
      	$this->edad=$e;
      	$this->color=$c;
       	$this->genero=$g;    
       	$this->nombre=$n;    
    }
//Metodo
	function Edad(){
        echo "La edad del conejo es: ".$this->edad;
    }
    function NombreYcolor(){
        echo "El nombre del conejo es: ".$this->nombre.
        "<br>"."El color del conejo es: ".$this->color;
    }
    function Genero(){
        echo "El genero del conejo es: ".$this->genero;
    }
}
$objeto1 = new Conejo(3,'gris','macho','Bonny');

$objeto1->NombreYcolor();
echo "<br>";
$objeto1->Edad();
echo "<br>";
$objeto1->Genero();
echo "<br>";

$objeto2 = new Conejo(6,'blanco','hembra','Luci');
echo "<br>";
$objeto2->NombreYcolor();
echo "<br>";
$objeto2->Edad();
echo "<br>";
$objeto2->Genero();

?> 

</body>
</html>
