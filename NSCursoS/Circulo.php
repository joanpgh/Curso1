<?php
/**
 * Created by PhpStorm.
 * User: devteam
 * Date: 6/6/16
 * Time: 7:33 PM
 */

namespace NSCursoS;

require_once('Punto.php');

class Circulo
{
    private $r;
    private $x;
    private $y;

    public function __construct($pr, Punto $pp) {
        $this->r = $pr;
        $this->x = $pp->getX();
        $this->y = $pp->getY();
    }

    public function getX() {
        return $this->x;
    }
    public function getY() {
        return $this->y;
    }
    public function getR() {
        return $this->r;
    }

    public function setX($px) {
        $this->x = $px;
    }
    public function setY($py) {
        $this->y = $py;
    }
    public function setR($pr) {
        $this->r = $pr;
    }
    public function __toString() {
        return 'Hola circulo ['.$this->getX().'-'.$this->getY().'] de radio ['.$this->getR().']';
    }

    public function aaaa() {
        $aux = $this->getR();
        return $aux;
    }
    public function paaa() {
        $aux = $this->getR();
        return $aux;
    }
}