<?php
/**
 * globescope - pageModif.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 06.02.2020 13:47
 */
?>
    <!-- ce formulaire sert a entrer les changements -->
    <html>
<head>
    <title>Globescope - Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/css/styleSideBar.css">
    <style>
        body {
            background-image: url("view/images/MilkyWay.jpg");
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
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


</head>
<body>
<div class="row">
    <div class="col-md-2 wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <a href="index.php?action=home"><input type="button" value="Retourner sur le globoscope"></a>
            <div class="p-4">
                <h1 style="color: white">Filtre</h1>
                <form method="POST" action="index.php?action=filtre">
                    <ul class="list-unstyled components mb-5">
                        <li>
                            <label><b>ID</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="idFiltre" class="form-control" placeholder="ID">
                            </div>
                        </li>
                        <li>
                            <label><b>IDImage</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="idImageFiltre" class="form-control" placeholder="IDImage">
                            </div>
                        </li>
                        <li>
                            <label><b>mer</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="merFiltre" class="form-control" placeholder="mer">
                            </div>
                        </li>
                        <li>
                            <label><b>lat</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="latFiltre" class="form-control" placeholder="lat">
                            </div>
                        </li>
                        <li>
                            <label><b>lon</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="lonFiltre" class="form-control" placeholder="lon">
                            </div>
                        </li>
                        <li>
                            <label><b>Pseudo</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="pseudoFiltre" class="form-control" placeholder="Pseudo">
                            </div>
                        </li>
                        <li>
                            <label><b>Droit</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="droitFiltre" class="form-control" placeholder="Droit">
                            </div>
                        </li>
                        <li>
                            <label><b>Slogan</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="sloganFiltre" class="form-control" placeholder="Slogan">
                            </div>
                        </li>
                        <li>
                            <label><b>ImageOK</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="imageOKFiltre" class="form-control" placeholder="ImageOK">
                            </div>
                        </li>
                        <li>
                            <label><b>Pays</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="paysFiltre" class="form-control" placeholder="Pays">
                            </div>
                        </li>
                        <li>
                            <label><b>Ville</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="villeFiltre" class="form-control" placeholder="Ville">
                            </div>
                        </li>
                        <li>
                            <label><b>Equipe</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="equipeFiltre" class="form-control" placeholder="Equipe">
                            </div>
                        </li>
                        <li>
                            <label><b>Media</b></label>
                            <div class="form-group d-flex">
                                <input type="text" name="Media" class="form-control" placeholder="Media">
                            </div>
                        </li>
                        <li class="text-center">
                            <input type="submit" class="btn-primary" value="Rechercher">
                        </li>
                    </ul>
                </form>

            </div>
        </nav>
    </div>











    <!-- cette fonction permet de filtrer sa rechercher -->
    <script>
        //fonction pour rechercher par type (FONCTIONNEL)
        function filtreType() {

            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("barreRechercheType");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

//boucle qui vérifie chaque row
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }

            }
        }
    </script>



    <div class="col-md-8 text-center">

        <!--barre de recherche par type-->
        <input type="text" id="barreRechercheType" onkeyup="filtreType()" placeholder="Rechercher par Type">

        <table style="color: white" class="text-center" id="myTable">
            <tr>
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

            </tr>
            <?php


            foreach ($produit_content as $value) {
                echo '<tr>' .
                    '<td>' . $value->IDPlace . '</td>',
                    '<td>' . $value->IDImage . '</td>',
                    '<td>' . $value->mer . '</td>',
                    '<td>' . $value->lat . '</td>',
                    '<td>' . $value->lon . '</td>',
                    '<td>' . $value->Pseudo . '</td>',
                    '<td>' . $value->Droit . '</td>',
                    '<td>' . $value->Slogan . '</td>',
                    '<td>' . $value->Provenance . '</td>',
                    '<td>' . $value->ImageOK . '</td>',
                '</tr>';
            }

            ?>
        </table>










    </div>
    <div class="col-md-2">
        <table>
            <tr>
                <th style="border: 0px"></th>
            </tr>
            <?php
            foreach ($produit_content as $value) {

                    echo '<tr>' . '<td style="border: none">' . '<a href="index.php?action=pageEditer&id=' . $value->IDPlace . '&idImage=' . $value->IDImage .'&mer=' . $value->mer .'&lat=' . $value->lat .'&lon=' . $value->lon . '&pseudo=' . $value->Pseudo . '&droit=' . $value->Droit . '&slogan=' . $value->Slogan .'&provenance=' . $value->Provenance . '&imageOK=' . $value->ImageOK . '" class="btn btn-secondary btn-sm">Modifier</a>' . '</td>' . '</tr>';
            }
            ?>
        </table>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
<?php