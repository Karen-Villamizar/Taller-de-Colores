<!DOCTYPE html>
<html>
<body>

<?php
class Oso{
var $nombre;
var $edad;
var $alimento;
var $genero;
function Oso($n,$e,$a,$g){
$this->nombre=$n;
$this->edad=$e;
$this->alimento=$a;
$this->genero=$g;
}
function Nombre(){
echo "El nombre del oso es ".$this->nombre;
}
function Edad(){
echo"La edad del osos es ".$this-> edad;}
function AlimenGenero(){
echo"El oso come ".$this->alimento;
echo "<br>";
echo "El genero del oso es ".$this->genero;}
}
$objeto1 = new Oso('winnie',5,'miel','m');
$objeto1->Nombre();
echo "<br>";
$objeto1->Edad();
echo "<br>";
$objeto1->AlimenGenero();

echo "<br>";

$objeto2 = new Oso('Yoggy',8,'comida del parque','m');
$objeto2->Nombre();
?> 

</body>
</html>