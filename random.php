<?php
/**
 * Created by PhpStorm.
 * User: volodymyr
 * Date: 26.10.16
 * Time: 23:54
 */

require_once 'vendor/autoload.php';

$random = new Rych\Random\Random();
$randomNumber = $random->getRandomInteger($_GET["first_number"],  $_GET["second_number"]);
?>

<h3>Випадкове число:</h3> <?php echo +$randomNumber;?>

