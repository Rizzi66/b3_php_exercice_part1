<?php

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */

 
class Article {

  public function __construct(private string $title, 
  private string $content) {

  }

  public function getSummary($maxLength): string {
    if (strlen($this->content)>$maxLength) {
      $newContent = substr($this->content, 0, $maxLength-3)."...";
    } else {
      $newContent = $this->content;
    }
    return $this->title."<br/>".$newContent;
  }

}

$article1 = new Article("Veste", "Cette veste est en vente au prix de 99 €");
echo $article1->getSummary(30)."<br/>";

echo $article1->getSummary(60);



