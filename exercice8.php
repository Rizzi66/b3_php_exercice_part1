<?php

/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */

 require_once "exercice2.php";
 
class Student extends Person {

  public function __construct(string $first_name,  
  string $last_name,  
  string $age,
  private array $grade)
  {
    parent::__construct($first_name, $last_name, $age);
  }

  public function getAverage(): float {
    $moyenne = $this->grade / strlen($this->grade);
    return $moyenne;
  }


  /**
   * Get the value of grade
   */
  public function getGrade(): array
  {
    return $this->grade;
  }

  /**
   * Set the value of grade
   */
  public function setGrade(array $grade): self
  {
    $this->grade = $grade;

    return $this;
  }
}


