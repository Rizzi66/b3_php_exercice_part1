<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */
 
class Math {

  static function add($a, $b): float {
    return $a+$b;
  }

  static function subtract($a, $b): float {
    return $a-$b;
  }

  static function multiply($a, $b): float {
    return $a*$b;
  }

}

$calcul1 = Math::add(2.45,3.12);
$calcul2 = Math::subtract(10,8.4);
$calcul3 = Math::multiply(5.3,2.4);

echo $calcul1."<br/>";
echo $calcul2."<br/>";
echo $calcul3;




