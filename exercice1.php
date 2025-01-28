<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos
*/


class Product {

  public function __construct(protected string $name, 
  protected float $price_without_tax, 
  protected float $vat_rate) {

  }

  public function getPriceWithVat(): float {
    return round($this->price_without_tax + $this->price_without_tax*$this->vat_rate, 2);
  }



  /**
   * Get the value of name
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Set the value of name
   */
  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of price_cithout_tax
   */
  public function getPriceWithoutTax(): float
  {
    return $this->price_without_tax;
  }

  /**
   * Set the value of price_cithout_tax
   */
  public function setPriceWithoutTax(float $price_cithout_tax): self
  {
    $this->price_without_tax = $price_cithout_tax;

    return $this;
  }

  /**
   * Get the value of vat_rate
   */
  public function getVatRate(): float
  {
    return $this->vat_rate;
  }

  /**
   * Set the value of vat_rate
   */
  public function setVatRate(float $vat_rate): self
  {
    $this->vat_rate = $vat_rate;

    return $this;
  }
}

$product1 = new Product("Casque", 21.54, 0.2);
echo "Produit : ".$product1->getName()."<br/>";
echo "Prix hors Taxe : ".$product1->getPriceWithoutTax()." €<br/>";
echo "Prix avec Taxe : ".$product1->getPriceWithVat()." €";

