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

<<<<<<< HEAD
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
=======
function logout()
{
>>>>>>> 8c820f651cfb7045ecf61ed95eccc02fc9dc3295
    $_SESSION = session_destroy();
    home();
}

function tableData()
{
    $_GET['action'] = 'edit';
    $produit_content = getData();
    $_GET['data'] = $produit_content;
    require "view/dataTable.php";
}

function checkLoginFunction($form)
{
    if (checkLogin($form)) {
        tableData();
    } else {
        login();
    }
}