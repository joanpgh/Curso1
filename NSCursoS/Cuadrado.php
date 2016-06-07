<?php
/**
 * Created by PhpStorm.
 * User: devteam
 * Date: 6/6/16
 * Time: 7:52 PM
 */

namespace NSCursoS;

require_once('Punto.php');

class Cuadrado
{
    private $l;
    private $origen;


    public function __construct($pl, $pp) {
        $this->l = $pl;
        $this->origen = $pp;
    }

    public function getOrigen() {
        return $this->origen;
    }
    public function getL() {
        return $this->l;
    }

    public function setOrigen($porigen) {
        $this->origen = $porigen;
    }
    public function setL($pl) {
        $this->y = $pl;
    }
    public function __toString() {
        return 'Hola cuadrado ['.$this->getL().'-'.$this->getOrigen().']';
    }

    public function perimetro() {
        $aux = $this->getL() * 4;
        return $aux;
    }
}