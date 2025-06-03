<?php

require_once ("NotificationEmail.php");
require_once ("NotificationSMS.php");
require_once ("NotificationPush.php");
require_once ("NotificationSystem.php");

$listeNotification = [new NotificationEmail(), new NotificationSMS(),  new NotificationPush()];

foreach($listeNotification as $notification){
    $notification->envoyerNotification();
}