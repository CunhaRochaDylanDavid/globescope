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

<<<<<<< HEAD

function donneeEnvoyerJSON($element){
//chemin d'accès au fichier json
    $fileJson = 'model/data/images.json';

    //cette condition va vérifier si il y a deja des données dans le fichier si oui alors rajoute un nouveau tableau en laissant celui qui y est/sont deja sinon inscrit le tableau dans le fichier
    if (file_get_contents($fileJson) == "") {

        //Attention les crochets dans se cas sont importants car sinon il va ajouter des numero pour chaque tableau ajouter
        $data = array([
            "mer" => @$_POST['valeur2'],

        ]);
        $dataEncode = json_encode($data, true);

        file_put_contents($fileJson, $dataEncode);
    } else {

        $data = array(
            "mer" => @$_POST['valeur2'],

        );
        $tempArray = file_get_contents($fileJson);
        $tempArray = json_decode($tempArray, true);
        array_push($tempArray, $data);
        $data = json_encode($tempArray, true);
        file_put_contents($fileJson, $data);

    }
=======
function getData()
{
    $current_file = file_get_contents("model/data/images.json");
    $parsed_booksData = json_decode($current_file);
    $array_data[] = $parsed_booksData;
    return $array_data;
>>>>>>> 8c820f651cfb7045ecf61ed95eccc02fc9dc3295
}