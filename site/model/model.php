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
        "Provenance" => @$_POST['provenancePageEditer'],
        "ImageOK" => @$_POST['imageOKPageEditer']

    );

    foreach ($tempArray as $item) {
        $modification[@$item['IDPlace']] = $item;

        $modification[$data["IDPlace"]]['mer'] = $data['mer'];
        $modification[$data["IDPlace"]]['lat'] = $data['lat'];
        $modification[$data["IDPlace"]]['lon'] = $data['lon'];
        $modification[$data["IDPlace"]]['Pseudo'] = $data['Pseudo'];
        $modification[$data["IDPlace"]]['Droit'] = $data['Droit'];
        $modification[$data["IDPlace"]]['Slogan'] = $data['Slogan'];
        $modification[$data["IDPlace"]]['Provenance'] = $data['Provenance'];
        $modification[$data["IDPlace"]]['ImageOK'] = $data['ImageOK'];
    }


    file_put_contents("model/data/images.json", json_encode($modification));


}








function filtreRecherche($filtre)
{

    if (file_exists("model/data/images.json")) {
        echo "1";
        $kids = json_decode(file_get_contents("model/data/images.json"), true);
        if (isset($filtre['pseudoFiltre'])) {
            echo "2";
            $i = 0;
            foreach ($kids as $kid) {
                if (stristr($kid['Pseudo'], $filtre['pseudoFiltre'], 0)) {
                    $kid['Pseudo']="";
                   echo $kid['Pseudo'];
                }
                $i++;
            }
            return $kids;
        }
    }
    else
        {
        return false;
        }
}


