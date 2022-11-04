<?php 
require_once 'vendor/autoload.php';

use App\Demo\Classes\Point2D;
use App\Demo\Classes\Forme;
use App\Demo\Classes\Rectangle;
use App\Demo\Classes\Cercle;
use App\Demo\Classes\Carre;


echo "<h1>POO Exercice : Supplementaire</h1>";

$rectangle = new Rectangle(2, 3, 1, 2);
echo $rectangle;

echo "</br></br>";

$cercle = new Cercle(3, 3, 2);
echo $cercle;
$cercle->getBouger(2, 1);
echo "</br></br>";
echo $cercle;

echo "</br></br>";

$Carre = new Carre(3, 3, 1);
echo $Carre;


  

var_dump($Carre);