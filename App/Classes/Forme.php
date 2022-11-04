<?php
namespace App\Demo\Classes;

abstract class Forme extends Point2D
{
    private $id;
    private $centre;

    protected static $compteur;

    public function __construct($x, $y)
    {
        self::$compteur++;
        $this->id = self::$compteur;
        $this->centre = new Point2D($x, $y);
        parent::__construct($x, $y);
    }
    abstract public function surface();

    abstract public function perimetre(); 

    public function getBouger(int $dx, int $dy)
    {
        parent::getBouger($dx, $dy);
    }

    public function __toString() 
    {
        parent::__toString();
    }

    public function getId()
    {
        return $this->id;
    }
    public function getCentre()
    {
        return $this->centre;
    }
}