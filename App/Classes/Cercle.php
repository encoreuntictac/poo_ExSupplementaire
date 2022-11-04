<?php 
namespace App\Demo\Classes;

class Cercle extends Forme
{
    private $rayon;
    private $pi;
    public function __construct(int $x, int $y, int $rayon)
    {
        parent::__construct($x, $y);
        $this->rayon = $rayon;
        $this->pi = 3.1415926535898;
    }

    public function getRayon()
    {
        return $this->rayon;
    }

    public function surface()
    {
        return 'Surface : ' . round($this->pi * ($this->rayon * $this->rayon), 2);
    }

    public function perimetre()
    {
        return 'Perimetre : ' . round(2 * $this->pi * $this->rayon, 2);
    }

    public function __toString() 
    {
        $html = explode('\\', __CLASS__);
        $html = end($html) . ' : ' . $this->getId() . '</br>';
        $html.= 'Centre : ' . $this->getCentre() .'</br>';
        $html.= 'Rayon : ' . $this->rayon .'</br>';
        $html.= $this->surface() .'</br>';
        $html.= $this->perimetre();

        return '<b>' . $html . '</b>';
    }
}