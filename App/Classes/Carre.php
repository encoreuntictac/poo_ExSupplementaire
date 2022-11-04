<?php
namespace App\Demo\Classes;

final class Carre extends Rectangle
{

    public function __construct(int $x, int $y, int $longueur)
    {
        $this->x = $x;
        $this->y = $y;
        $this->longueur = $longueur;
        $this->largeur = $longueur;
        $this->centre = new Point2D($x, $y);
        self::$compteur++;
        $this->id = self::$compteur;
    }

    public function __toString() 
    {
        $html = explode('\\', __CLASS__);
        $html = end($html) . ' : ' . $this->getId() . '</br>';
        $html.= 'Centre : ' . $this->getCentre() .'</br>';
        $html.= 'Longueur : ' . $this->longueur .'</br>';
        $html.= $this->surface() .'</br>';
        $html.= $this->perimetre() .'</br>';

        return '<b>' . $html . '</b>';
    }

    public function surface()
    {
        return 'Surface : ' . $this->longueur * $this->longueur;
    }

    public function perimetre()
    {
        return 'Perimetre : ' . 4 * $this->longueur;
    }

    public function getCentre()
    {
        return $this->centre;
    }

    public function getId()
    {
        return $this->id;
    }
}