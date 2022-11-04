<?php 
namespace App\Demo\Classes; 

class Point2D 
{
    private $x;
    private $y;

    public function __construct(int $x, int $y) 
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setX($x) 
    {
        $this->x = $x;
    }
    public function setY($y) 
    { 
        $this->y = $y;
    }
    public function getX() 
    {
        return $this->x;
    }
    public function getY() 
    {
        return $this->y;
    }

    public function getBouger(int $dx, int $dy)
    {
        $dx = $this->x + $dx;
        $dy = $this->x + $dy;

        $this->setX($dx) . ',' . $this->setY($dy);    
    }

    public function __toString() 
    {
        return 'Point( x = ' . $this->x . ', y = ' .$this->y . ')';
    }
}