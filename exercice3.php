<?php

require_once "exercice2.php";

class Employee extends Person {

  public function __construct(string $first_name,  
  string $last_name,  
  string $age,
  private float $salary, 
  private string $position) 
  {
    parent::__construct($first_name, $last_name, $age);
  }

  public function afficherInfos(): string {
    return $this->first_name." ".$this->last_name." - ".strval($this->age)." ans<br/>".
    "Poste : ".$this->position."<br/>Salaire : ".$this->salary."€ par mois";
  }

}

$employee1 = new Employee("Romain", "Segarizzi", 30, 2190.45, "Technicien vidéo");
echo "<br/>Information de la personne : <br/>".$employee1->afficherInfos();

/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */
