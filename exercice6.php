<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */

 
class ShoppingCart {

  public function __construct(private array $items, 
  private float $total) {

  }

  public function addArticles($item): void {
    array_push($this->items, $item);
  }
  



  /**
   * Get the value of items
   */
  public function getItems(): array
  {
    return $this->items;
  }

  /**
   * Get the value of total
   */
  public function getTotal(): float
  {
    for ($i = 1; $i <= strlen($this->items); $i++) {
  
  }
    return $this->total;
  }
}

// $product1 = new Product("Casque", 21.54, 0.2);
// echo "Produit : ".$product1->getName()."<br/>";
// echo "Prix hors Taxe : ".$product1->getPriceWithoutTax()." €<br/>";
// echo "Prix avec Taxe : ".$product1->getPriceWithVat()." €";

