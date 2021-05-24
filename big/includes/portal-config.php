<?php

/*
portal-config.php
used to store all of our IT162 configuration information
*/

//prevents data from being sent early
ob_start();
//Site keys
$siteKey = "6Lfi3bcaAAAAAGuiYB4D459nl3Fpa2X4DVpmtbKe";
$secretKey = "6Lfi3bcaAAAAAB2WlSuZ5iOUXEwCJfDCrg09dWFI";

date_default_timezone_set('America/Los_Angeles');


//echo $_SERVER['PHP_SELF'];
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){
        case '../index.php';
            $title = "Home";
            $logo = 'fas fa-home-heart';
            $PageID = 'Client Questionnaire';
        break;
        case 'big/index.php';
            $title = "Web Dev Examples by Alex Malloy";
            $logo = 'fas fa-question-square';
            $PageID = 'Client Questionnaire';
        break;
        case 'Flexbox.php':
            $title = "Flexbox Research";
            $logo = 'fas fa-users'; //change this fontawesome icon
            $PageID = 'Flexbox';
        break;
        case 'map.php':
            $title = "Google Map";
            $logo = 'fas map-marker-alt'; //change this fontawesome icon
            $PageID = 'Google Map';
        break;
        case 'calendar.php':
            $title = "Google Calendar";
            $logo = 'fas calendar-alt'; //change this fontawesome icon
            $PageID = 'Google Calendar';
        break;
        case 'shoppingcarts.php':
            
            $title = "Shopping Carts Research";
            $logo = 'fas shopping-cart'; //change this fontawesome icon
            $PageID = 'Shopping Carts';
        case 'siteapp.php':
            
                $title = "Responsive App vs Native App";
                $logo = 'fas fa-browser'; //change this fontawesome icon
                $PageID = 'Websites vs Apps';
        case 'webcam.php':
            
                    $title = "Live Web Cameras";
                    $logo = 'fas fa-webcam'; //change this fontawesome icon
                    $PageID = 'Welcome';
        break;


        default:
            $title = THIS_PAGE;
            $logo = 'fas fa-home';
            $PageID = 'Welcome';


}


?>
