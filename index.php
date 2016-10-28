
<?php
require_once 'vendor/autoload.php';
use Jenssegers\Date\Date;
echo Date::now()->format('l j F Y H:i:s');
?>



<form  action="random.php" method="get">

      Генератор випадкових чисел з заданого діапазону<p>
        Введіть перше число <br>
    <input type="text" name="first_number"><p>
        Введіть друге число <br>
    <input type="text" name="second_number">
    <input type="submit" value="Запустити генератор">

</form>



