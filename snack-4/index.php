<?php
include_once __DIR__ . '/Person.php';

$persona = new Person();

try {
    echo $persona->setAge('ciao');
} catch (Exception $error) {
    echo 'setAge Error: ' . $error->getMessage();
}
