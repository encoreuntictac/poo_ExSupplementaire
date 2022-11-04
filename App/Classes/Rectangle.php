<?php
namespace App\Demo\Classes;

class Rectangle extends Forme
{
    private $largeur;
    private $longueur;

    public function __construct(int $x, int $y, int $largeur, int $longueur)
    {
        parent::__construct($x, $y);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    public function surface()
    {
        return 'Surface : ' . $this->largeur * $this->longueur;
    }

    public function perimetre()
    {
        return 'Perimetre : ' . 2 * ($this->largeur + $this->longueur);
    }

    public function __toString() 
    {
        $html = explode('\\', __CLASS__);
        $html = end($html) . ' : ' . $this->getId() . '</br>';
        $html.= 'Centre : ' . $this->getCentre() .'</br>';
        $html.= 'Largeur : ' . $this->largeur .'</br>';
        $html.= 'Longueur : ' . $this->longueur .'</br>';
        $html.= $this->surface() .'</br>';
        $html.= $this->perimetre() .'</br>';

        return '<b>' . $html . '</b>';
    }

    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    }
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    }
    public function getLargeur()
    {
        return $this->largeur;
    }
    public function getLongueur()
    {
        return $this->longueur;
    }
}