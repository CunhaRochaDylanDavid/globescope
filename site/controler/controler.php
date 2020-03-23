<?php
/**
 * Created by PhpStorm.
 * User: Dylan-David.CUNHA-RO
 * Date: 06.02.2020
 * Time: 14:48
 */

session_start();

require "model/model.php";
/*
 * Function to display the home page to the user
 */
function home()
{
    $_GET['action'] = 'home';
    require "view/site.php";
}

/**
 *
 */
function login()
{
    $_GET['action'] = 'login';
    require_once "view/login.php";
}


/**
 *
 */

function pageEditer()
{
    $_GET['action'] = "pageEditer";

    $pseudo = @$_POST["pseudoPageEditer"];

    if (isset($pseudo)) {
        donneeEnvoyerJSON();
        dataTable();
    }else
        require "view/pageEditer.php";
}

/**
 *
 */
function logout()
{
    $_SESSION = session_destroy();
    home();
}

/**
 *
 */
function dataTable()
{
        $_GET['action'] = 'dataTable';
        $produit_content = getData();

        require "view/dataTable.php";
}

/**
 * @param $form
 */
function checkLoginFunction($form)
{
    if (checkLogin($form)) {
        dataTable();
    } else {
        login();
    }
}