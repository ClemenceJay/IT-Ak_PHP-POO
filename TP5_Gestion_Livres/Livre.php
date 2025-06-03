<?php

class Livre {
    public string $titre;
    public string $auteur;
    public int $anneePublication;
    public bool $disponible;

    public function __construct(string $titre, string $auteur, int $anneePublication) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->anneePublication = $anneePublication;
        $this->disponible = true;
    }

    public function afficherDetails() {
        echo "'".$this->titre."' - ".$this->auteur." (".$this->anneePublication.")";
    }

    public function emprunter()
    {
        if ($this->disponible){
            $this->disponible = false;
            echo "Vous pouvez emprunter le livre ".$this->titre."<br>";
        } else {
            echo "Le livre ".$this->titre." n'est pas disponible <br>";
        }
    }
}

class LivrePapier extends Livre {
    public int $nombrePage;
    public function __construct(string $titre, string $auteur, int $anneePublication, int $nombrePage)
    {
        parent::__construct($titre, $auteur, $anneePublication);
        $this->nombrePage = $nombrePage;
    }

    public function afficherDetails() : void {
        parent::afficherDetails();
        echo " nombre de pages: ".$this->nombrePage."<br>";
    }
}

class Ebook extends Livre {
    public string $format;
    public function __construct(string $titre, string $auteur, int $anneePublication, string $format)
    {
        parent::__construct($titre, $auteur, $anneePublication);
        $this->format = $format;
    }

    public function afficherDetails() : void {
        parent::afficherDetails();
        echo " format: ".$this->format."<br>";
    }
}