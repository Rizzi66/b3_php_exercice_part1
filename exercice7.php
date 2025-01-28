<?php 

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/

 
class BankAccount {

  public function __construct(private float $balance) {

  }

  public function deposit($amount): float {
    $this->balance = $this->balance + $amount;
    return $this->balance;
  }

  public function withdraw($amount): float |string {
    if ($this->balance - $amount >= 0) {
      $this->balance = $this->balance - $amount;
      return $this->balance;
    } else {
      "operation impossible";
    }
  }
  



  /**
   * Get the value of balance
   */
  public function getBalance(): float
  {
    return $this->balance;
  }

  /**
   * Set the value of balance
   */
  public function setBalance(float $balance): self
  {
    $this->balance = $balance;

    return $this;
  }
}

$bankAccount1 = new BankAccount(8454);
echo "Solde : ".$bankAccount1->getBalance()."<br/>";
echo "Nouveau solde après retrait : ".$bankAccount1->withdraw(23)."<br/>";
echo "Nouveau solde après ajout : ".$bankAccount1->deposit(300);


