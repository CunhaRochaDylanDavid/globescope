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




function donneeEnvoyerJSON()
{
//chemin d'accès au fichier json
    $path = file_get_contents('model/data/images.json');
    $tempArray = json_decode($path, true);


    $data = array(
        "IDPlace" =>@$_POST['idPageEditer'],
        "Pseudo" => @$_POST['pseudoPageEditer'],
        "Droit" => @$_POST['droitPageEditer']
    );


    foreach ($tempArray as $item) {
        $modification[@$item['IDPlace']] = $item;
        $modification[$data["IDPlace"]]['Pseudo'] = $data['Pseudo'];
    }


    file_put_contents("model/data/images.json", json_encode($modification));


}


function getData()
{
    $current_file = file_get_contents("model/data/images.json");
    $parsed_booksData = json_decode($current_file);
    $array_data[] = $parsed_booksData;
    return $array_data;
}


/*
function filtreRecherche($filtre)
{
    if (file_exists("model/data/images.json")) {
        $kids = json_decode(file_get_contents("model/data/images.json"), true);
        if (isset($filtre['pseudo'])) {
            $i = 0;
            foreach ($kids as $kid) {
                if (!stristr($kid['Pseudo'], $filtre['pseudo'], 0)) {
                    unset($kids[$i]);
                }
                $i++;
            }
            return $kids;
        }
    } else {
        return false;
    }
}
*/