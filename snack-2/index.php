<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->



<form action="./index.php" method="GET">
    <label for="form">Inserisci</label>
    <input type="text" id="form" name="name">
    <!-- <input type="email" id="form" name="mail"> -->
    <input type="text" id="form" name="age">
    <button type="submit">Invia</button>
</form>

<?php
if (strlen($_GET['name']) > 3) {
    echo 'Nice';
} else {
    echo 'nope';
}
