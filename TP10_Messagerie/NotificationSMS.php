<?php
require_once ("Notifiable.php");

class NotificationSMS implements Notifiable {
    public function envoyerNotification()  : void{
        echo "Envoi d'un SMS de notification.<br>";
    }
}