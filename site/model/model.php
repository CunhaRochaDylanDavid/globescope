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
        "IDPlace" => @$_POST['idPageEditer'],
        "IDImage" => @$_POST['idImagePageEditer'],
        "mer" => @$_POST['merPageEditer'],
        "lat" => @$_POST['latPageEditer'],
        "lon" => @$_POST['lonPageEditer'],
        "Pseudo" => @$_POST['pseudoPageEditer'],
        "Droit" => @$_POST['droitPageEditer'],
        "Slogan" => @$_POST['sloganPageEditer'],
        "Provenance" => @$_POST['provenancePageEditer'],
        "ImageOK" => @$_POST['imageOKPageEditer'],
        "Pays" => @$_POST['paysPageEditer'],
        "Ville" => @$_POST['villePageEditer'],
        "Equipe" => @$_POST['equipePageEditer'],
        "Media" => @$_POST['mediaPageEditer']
    );


    foreach ($tempArray as $item) {
        $modification[@$item['IDPlace']] = $item;
        $modification[$data["IDPlace"]]['IDImage'] = $data['idImagePageEditer'];
        $modification[$data["IDPlace"]]['mer'] = $data['merPageEditer'];
        $modification[$data["IDPlace"]]['lat'] = $data['latPageEditer'];
        $modification[$data["IDPlace"]]['lon'] = $data['lonPageEditer'];
        $modification[$data["IDPlace"]]['Pseudo'] = $data['pseudoPageEditer'];
        $modification[$data["IDPlace"]]['Droit'] = $data['droitPageEditer'];
        $modification[$data["IDPlace"]]['Slogan'] = $data['sloganPageEditer'];
        $modification[$data["IDPlace"]]['Provenance'] = $data['provenancePageEditer'];
        $modification[$data["IDPlace"]]['ImageOK'] = $data['imageOKPageEditer'];
        $modification[$data["IDPlace"]]['Pays'] = $data['paysPageEditer'];
        $modification[$data["IDPlace"]]['Ville'] = $data['villePageEditer'];
        $modification[$data["IDPlace"]]['Equipe'] = $data['equipePageEditer'];
        $modification[$data["IDPlace"]]['Media'] = $data['mediaPageEditer'];
    }


    file_put_contents("model/data/images.json", json_encode($modification));


}




function getData()
{
    $current_file = file_get_contents("model/data/images.json");
    $parsedData = json_decode($current_file);

    return $parsedData;
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