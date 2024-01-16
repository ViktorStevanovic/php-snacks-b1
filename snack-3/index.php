<?php
$firstNumber = (int)$_GET['firstNum'];
$secondNumber = (int)$_GET['secondNum'];
$average = ($firstNumber + $secondNumber) / 2;
echo $average;
?>

<form action="./index.php" method="GET">
    <label for="firstNum">N.1</label>
    <input type="text" id="firstNum" name="firstNum">
    <label for="secondNum">N.2</label>
    <input type="text" id="secondNum" name="secondNum">
    <button type="submit">Invia</button>
</form>