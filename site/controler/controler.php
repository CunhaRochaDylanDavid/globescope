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