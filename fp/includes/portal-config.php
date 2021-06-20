<?php

/*
portal-config.php
used to store all of our IT162 configuration information
*/

//prevents data from being sent early
ob_start();

date_default_timezone_set('America/Los_Angeles');

$nav1['../index.php'] = 'Welcome';
$nav1['food.php'] = 'Food';
$nav1['bottles.php'] = 'Bottles';
$nav1['aboutus.php'] = 'aboutus';
$nav1['locationHours.php'] = 'Location and Hours';
$nav1['events.php'] = 'Events';


//echo $_SERVER['PHP_SELF'];
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){
        case 'index.php';
            $title = "The Pint And Ladle";
            $logo = 'fas fa-home-heart';
            $PageID = 'Welcome';
        break;
        case 'food.php';
            $title = "Food";
            $logo = 'fas fa-search-plus';
            $PageID = 'Food';
        break;
        case 'aboutus.php':
            $title = "About Us";
            $logo = 'fas fa-users';
            $PageID = 'About Us';
        break;
        case 'locationHours.php':
            $title = "Location and Hours";
            $logo = 'fas fa-arrows-alt';
            $PageID = 'Location and Hours';
        break;
        case 'Events.php':
            $title = "Events";
            $logo = 'fas fa-trophy-alt';
            $PageID = 'Events';
        break;
        default:
            $title = THIS_PAGE;
            $logo = 'fas fa-home';
            $PageID = 'Welcome';


}



/* here is a function to generate links and keep the highlight on the current page
<li><a href="IT162/index.php" class="selected">Welcome</a></li>
      <li><a href="IT162/big/index.php">Big</a></li>
      <li><a href="IT162/aia.php">AIA</a></li>
      <li><a href="IT162/flowchart.php">Flowchart/Layout</a></li>
      <li><a href="IT162/fp/index.php">Final Project</a></li>
      <li><a href="IT162/contact.php">Contact Alexander</a></li> 
*/

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
            $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
        }else{
            $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
        }    
    }
      
    return $myReturn;    
}

?>
