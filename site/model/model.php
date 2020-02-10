<?php
/**
 * Created by PhpStorm.
 * User: Dylan-David.CUNHA-RO
 * Date: 06.02.2020
 * Time: 14:48
 */

function checkLogin($form)
{
    if (isset($form['email']) && isset($form['password'])) {
        if ($form['email'] == 'admin' && $form['password'] == 123) {
            $_GET['error'] = false;
            $_SESSION['admin'] = $form['email'];
            return true;
        } else {
            $_GET['error'] = true;
            login();
        }
    }
    if ($_GET['error'] = true) {
        return false;
    }
}