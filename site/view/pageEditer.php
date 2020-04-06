<?php
/**
 * Globoscope - pageEditer.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 13.02.2020 14:07
 */
?>
    <html>
    <head>
        <link rel="stylesheet" href="view/css/bootstrap.min.css">
        <style>
            body {
                background-image: url("view/images/MilkyWay.jpg");
            }

            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                color: white;
                text-align: center;
            }

            td {
                border: 1px solid #dddddd;
                height: 40px;
                font-size: 16px;
            }

            th {
                border: 3px solid #dddddd;
                height: 40px;
                font-size: 20px;
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    </head>
    <body>
    <!-- tout le tableau-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 text-center" style="margin-top: 400px">
                <form  method="POST" action="index.php?action=pageEditer">
                    <table class="text-center">
                        <tr style="border: black solid 2px">
                            <th>IDPlace</th>
                            <th>IDImage</th>
                            <th>mer</th>
                            <th>lat</th>
                            <th>lon</th>
                            <th>Pseudo</th>
                            <th>Droit</th>
                            <th>Slogan</th>
                            <th>Provenance</th>
                            <th>ImageOK</th>
                            <th>Pays</th>
                            <th>Ville</th>
                            <th>Equipe</th>

                        </tr>
                        <tr>
                            <td><input class="form-control form-control-sm" name="idPlacePageEditer" value="<?= $_GET['id']; ?>"></td>
                            <td><input class="form-control form-control-sm" name="idImagePageEditer" value="<?= $_GET['idImage']; ?>"></td>
                            <td><input class="form-control form-control-sm" name="merPageEditer" value="<?= $_GET['mer']; ?>"></td>
                            <td><input class="form-control form-control-sm" name="latPageEditer" value="<?= $_GET['lat']; ?>"></td>
                            <td><input class="form-control form-control-sm" name="lonPageEditer" value="<?= $_GET['lon']; ?>"></td>
                            <td><input class="form-control form-control-sm" name="pseudoPageEditer" value="<?= $_GET['pseudo']; ?>"></td>
                            <td><input class="form-control form-control-sm" name="droitPageEditer" value="<?= $_GET['droit']; ?>"></td>
                            <td><input class="form-control form-control-sm" name="sloganPageEditer" value="<?= $_GET['slogan']; ?>"></td>
                            <td><input class="form-control form-control-sm" name="provenancePageEditer" value="<?= $_GET['provenance']; ?>"></td>
                            <td><input class="form-control form-control-sm" name="imageOKPageEditer" value="<?= $_GET['imageOK']; ?>"></td>
                            <td><input class="form-control form-control-sm" name="paysEditer" value="<?= $_GET['pays']; ?>"></td>
                            <td><input class="form-control form-control-sm" name="villeEditer" value="<?= $_GET['ville']; ?>"></td>
                            <td><input class="form-control form-control-sm" name="equipeEditer" value="<?= $_GET['equipe']; ?>"></td>
                        </tr>
                    </table>
                    <div class="text-right" style="margin-top: 10px">
                        <input type="submit" value="Enregistrer" class="btn btn-secondary">
                        <a href="index.php?action=dataTable" class="btn btn-secondary">Annuler</a>

                    </div>
                </form>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    </body>
    </html>
<?php


