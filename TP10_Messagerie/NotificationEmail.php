<?php
require_once ("Notifiable.php");

class NotificationEmail implements Notifiable {
    public function envoyerNotification() : void{
        echo "Envoi d'un email de notification.<br>";
    }
    final public function configurerServeurSMTP(): void {

    }
}

//class NotificationEmailAvancee extends NotificationEmail
//{
//    public function configurerServeurSMTP() : void{
//        echo "test";
//    }
//}