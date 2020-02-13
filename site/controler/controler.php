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

function login()
{
    $_GET['action'] = 'login';
    require_once "view/login.php";
}

//A SUPPRIMMER
function pageEditer()
{
    $_POST['action'] = "pageEditer";

    $username = @$_POST["Username"];


    if (isset($username)) {
        donneeEnvoyerJSON($username);
        home();
    } else
        require "view/pageEditer.php";
}

function logout(){
    $_SESSION = session_destroy();
    home();
}

function checkLoginFunction($form)
{
    if (checkLogin($form)) {
        home();
    } else {
        login();
    }
}