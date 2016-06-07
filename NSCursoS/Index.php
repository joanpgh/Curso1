<?php
/**
 * Created by PhpStorm.
 * User: devteam
 * Date: 6/6/16
 * Time: 6:05 PM
 */

namespace NSCursoS;

require_once('Punto.php');
require_once('Circulo.php');
require_once('Cuadrado.php');

class Index
{


    public static function index()
    {
        phpinfo();
    }



    public function nombre() {
        echo '<h1>'.'hola'.'</h1>';
    }
}

//Index::index();

//http://localhost:55556/NSCursoS/Index.php

//$index = new Index();
//$index->nombre();

$p = new Punto(2,3);

echo $p;

echo '<br />';

echo 'distancia ['.$p->d(new Punto(10,800)).']';

echo '<br />';
var_dump($p);
echo '<br />';
var_dump($p);

echo '<br />';
$c = new Circulo(4, $p);

echo $c;

echo '<br />';
$cua = new Cuadrado(40, $p);

echo $cua;
