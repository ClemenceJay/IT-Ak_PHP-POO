<?php

class Contact {
    private string $nom;
    private string $prenom;
    private string $email;

    public function __construct(string $nom, string $prenom, string $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return  $this->prenom;
    }

    public function getEmail(): string {
        return $this->email;
    }
}

//TEST :
$contact1 = new Contact("Dupont", "Alice", "alice@example.com");
$contact2 = new Contact("Martin", "Bob", "bob@example.com");

$listeContact = [$contact1, $contact2];

foreach ($listeContact as $contact) {
    echo "Nom :".$contact->getNom()."<br>";
    echo "Prénom :".$contact->getPrenom()."<br>";
    echo "Email :".$contact->getEmail()."<br><br>";
}