<?php
Class Personaje {
    public $nombre;
    public function saludar() {
        return "Hola, soy " . $this->nombre;
    }
    
}
$pj = new Personaje();
$pj->nombre = "Kevin";
echo $pj->Saludar();
$edad = "tengo 17";
echo "<br>";
echo $edad;
echo "<br>";

$pj1 = new Personaje();
$pj1->nombre = "Sandra";
echo $pj1->Saludar();
$edad =  15;
echo "<br>";
echo $edad;
echo "<br>";
?> 
