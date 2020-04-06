<?php
/**
 * Created by PhpStorm.
 * User: Dylan-David.CUNHA-RO
 * Date: 06.02.2020
 * Time: 14:48
 */


//cette fonction va vérifier si les donnéees du login entrée son juste
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


//cette fonction va récuperer le tableau des données des photos dans le fichier JSON
function getData()
{
    $current_file = file_get_contents("model/data/images.json");
    $parsedData = json_decode($current_file);

    //var_dump($parsedData);

    return $parsedData;
}


//Cette fonction va permettre de modifier les donnée du JSON avec les donnée entrée par l'admin
function donneeEnvoyerJSON()
{


//chemin d'accès au fichier json
    $path = file_get_contents('model/data/images.json');
    $tempArray = json_decode($path, true);


    $data = array(
        "IDPlace" => @$_POST['idPlacePageEditer'],
        "IDImage" => @$_POST['idImagePageEditer'],
        "mer" => @$_POST['merPageEditer'],
        "lat" => @$_POST['latPageEditer'],
        "lon" => @$_POST['lonPageEditer'],
        "Pseudo" => @$_POST['pseudoPageEditer'],
        "Droit" => @$_POST['droitPageEditer'],
        "Slogan" => @$_POST['sloganPageEditer'],
        "ImageOK" => @$_POST['imageOKPageEditer'],
        "Pays" => @$_POST['paysEditer'],
        "Ville" => @$_POST['villeEditer'],
        "Ecole" => @$_POST['ecoleEditer'],
        "Media" => @$_POST['mediaEditer']

    );

    foreach ($tempArray as $item) {
        $modification[@$item['IDPlace']] = $item;

        $modification[$data["IDPlace"]]['mer'] = $data['mer'];
        $modification[$data["IDPlace"]]['lat'] = $data['lat'];
        $modification[$data["IDPlace"]]['lon'] = $data['lon'];
        $modification[$data["IDPlace"]]['Pseudo'] = $data['Pseudo'];
        $modification[$data["IDPlace"]]['Droit'] = $data['Droit'];
        $modification[$data["IDPlace"]]['Slogan'] = $data['Slogan'];
        $modification[$data["IDPlace"]]['ImageOK'] = $data['ImageOK'];
        $modification[$data["IDPlace"]]['Pays'] = $data['Pays'];
        $modification[$data["IDPlace"]]['Ville'] = $data['Ville'];
        $modification[$data["IDPlace"]]['Ecole'] = $data['Ecole'];
        $modification[$data["IDPlace"]]['Media'] = $data['Media'];
    }


    file_put_contents("model/data/images.json", json_encode($modification));
    writer();

}

function writer(){
    $current_file = file_get_contents("model/data/images.json");
    $parsed_file = json_decode($current_file);


    $val = 0;
    foreach ($parsed_file as $item){
        $item =array(
            'IDPlace' => $item ->IDPlace,
            'IDImage' => $item -> IDImage,
            'mer' => $item -> mer ,
            'lat'=> $item ->lat,
            'lon'=> $item ->lon,
            'Pseudo'=> $item ->Pseudo,
            'Droit'=> $item ->Droit,
            'Slogan'=> $item ->Slogan,
            'Pays'=> $item ->Pays,
            'ImageOK'=> $item ->ImageOK,
            'Ville' => $item ->Ville,
            'Ecole' => $item ->Ecole,
            'Media' => $item ->Media);
        $data[$val] = $item;
        $val++;
    }
    $input_file = json_encode($data);
    file_put_contents("model/data/images.json",$input_file);
}


function filtreRecherche($filtre)
{

    if (file_exists("model/data/images.json")) {
        $kids = json_decode(file_get_contents("model/data/images.json"), true);
        if (isset($filtre['pseudoFiltre'])) {
            $i = 0;
            foreach ($kids as $kid) {
                if (stristr($kid['Pseudo'], $filtre['pseudoFiltre'], 0)) {
                    echo $kid['Pseudo'];
                }
                $i++;
            }
            return $kids;
        }
    } else {
        return false;
    }
}


