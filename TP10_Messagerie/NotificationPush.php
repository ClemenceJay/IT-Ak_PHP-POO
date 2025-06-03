<?php
require_once ("Notifiable.php");

class NotificationPush implements Notifiable {
    public function envoyerNotification() :void {
        echo "Envoi d'une notification push.<br>";
    }
}