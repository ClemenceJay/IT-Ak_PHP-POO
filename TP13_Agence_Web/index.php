<?php

require_once ("Classes/Projet.php");
require_once ("Classes/DevelopmentTask.php");
require_once ("Classes/DesignTask.php");
require_once ("Classes/Developer.php");

//Création projets
$projet1 =  new Projet(1, "Site Web Toilettage", "Bulle de poils");
$projet2 = new Projet(2, "Site vitrine", "Boutiques Jour de pluie");

//Creation dev
$andy = new Developer(1, "Andy Opran", ["PHP","JQuery","API"]);
$mathilde =  new Developer(2, "Mathilde Tunsat", ["CSS","JQuery","Design", "Figma"]);

//création Taches
$task1 = new DesignTask(1, "Faire la maquette", $mathilde, "Figma");
$task2 = new DevelopmentTask(2, "Programmation back", $andy, 14.5);
$task3 = new DevelopmentTask(3, "Creation de la BDD", $andy, 10);
$task4 = new DesignTask(4, "Front et CSS", $mathilde, "JS");

//attribution des taches au projet 1
$projet1->addTask($task1);
$projet1->addTask($task2);
$projet1->addTask($task3);
$projet1->addTask($task4);

//Attribution des taches aux dev
$andy->assignTask($task2);
$andy->assignTask($task3);
$mathilde->assignTask($task1);
$mathilde->assignTask($task4);

//Simulation de l'avancée du projet
echo "Actuellement ".$andy->getName()." a ".$andy->getWorkload()." taches en cours. <br>";
echo "Actuellement ".$mathilde->getName()." a ".$mathilde->getWorkload()." taches en cours. <br>";
echo "L'avancement du projet est de : ".$projet1->getProgress()."%. <br>";

$task1->completeTask();
echo "Actuellement ".$andy->getName()." a ".$andy->getWorkload()." taches en cours. <br>";
echo "Actuellement ".$mathilde->getName()." a ".$mathilde->getWorkload()." taches en cours. <br>";
echo "L'avancement du projet est de : ".$projet1->getProgress()."%. <br>";

$task2->completeTask();
echo "Actuellement ".$andy->getName()." a ".$andy->getWorkload()." taches en cours. <br>";
echo "Actuellement ".$mathilde->getName()." a ".$mathilde->getWorkload()." taches en cours. <br>";
echo "L'avancement du projet est de : ".$projet1->getProgress()."%. <br>";

//Cas d'une tache deja complétée (déclenchement de l'exception) :
//$task2->completeTask();

$task3->completeTask();
echo "Actuellement ".$andy->getName()." a ".$andy->getWorkload()." taches en cours. <br>";
echo "Actuellement ".$mathilde->getName()." a ".$mathilde->getWorkload()." taches en cours. <br>";
echo "L'avancement du projet est de : ".$projet1->getProgress()."%. <br>";

$task4->completeTask();
echo "Actuellement ".$andy->getName()." a ".$andy->getWorkload()." taches en cours. <br>";
echo "Actuellement ".$mathilde->getName()." a ".$mathilde->getWorkload()." taches en cours. <br>";
echo "L'avancement du projet est de : ".$projet1->getProgress()."%. <br>";

//calcul des taches de dev sur le projet:
$totalCost = 0;
foreach ($projet1->tasks as $task) {
    if  ($task->isCompleted && method_exists($task, "calculateCost")) {
        $totalCost += $task->calculateCost();
    }
}
echo "Le cout total de développement du projet est de ".$totalCost."€. <br>";