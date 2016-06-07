<?php
/**
 * Created by PhpStorm.
 * User: devteam
 * Date: 6/6/16
 * Time: 6:57 PM
 */

namespace NSCursoS;


class Punto
{
    private $x;
    private $y;


    public function __construct($px, $py) {
        $this->x = $px;
        $this->y = $py;
    }

    public function getX() {
        return $this->x;
    }
    public function getY() {
        return $this->y;
    }

    public function setX($px) {
        $this->x = $px;
    }
    public function setY($py) {
        $this->y = $py;
    }
    public function __toString() {
        return 'Hola punto ['.$this->getX().'-'.$this->getY().']';
    }

    public function d(Punto $pp) {
        $aux = pow($pp->x-$this->getX(),2);
        return $aux;
    }
}