<?php
/**
 * Created by PhpStorm.
 * User: Dylan-David.CUNHA-RO
 * Date: 06.02.2020
 * Time: 15:40
 */

require "controler/controler.php";

// Switch qui va lire la valeur de l'action et exécuter la fonction dans le controler, si aucune valeur alors par défaut ça sera la fonction home
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;

        case 'login':
            login();
            break;

        case 'checkLogin' :
            checkLoginFunction($_POST);
            break;

        case 'logout':
            logout();
            break;

        case 'pageEditer':
            pageEditer();
            break;

        case 'filtre':
            filtre($_POST);
            break;

        case 'dataTable':
            dataTable();
            break;

        default :
            home();
    }
} else {
    home();
}
