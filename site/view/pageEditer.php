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
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
<<<<<<< HEAD
    <table>
        <tr>
            <th>ID</th>
            <th>Pseudo</th>
            <th>Droit</th>
            <th>Slogan</th>
        </tr>
        <tr>
            <form action="index.php?action=pageEditor" method="POST">
                <td><input type="text" name="valeur1"></td>
                <td><input type="text" name="valeur2"></td>
                <td><input type="text" name="valeur3"></td>
                <td><input type="text" name="valeur4"></td>
                <td><input type="text" name="valeur5"></td>
                <td><input type="text" name="valeur6"></td>
                <td></td>
                <input type="submit" value="Modifier">
            </form>
        </tr>
    </table>
=======

    <!-- tout le tableau-->
    <div class="container">
        <div class="row">
            <table class="table-responsive">
                <tr>
                    <th>ID</th>
                    <th>Pseudo</th>
                    <th>Pays</th>
                    <th>Ville</th>
                    <th>Droit de l'enfant</th>
                    <th>Etablissement scolaire</th>
                    <th>Team VMPJ</th>
                    <th>Photo</th>
                </tr>

                <tr>
                    <form action="index.php?action=pageEditer" method="POST">
                        <td></td>
                        <td><input type="text" name="pseudo"></td>
                        <td><input type="text" name="valeur2"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td></td>

                        <!--boutton enregistrer-->
                        <div style="margin-top: 15px;margin-left:15px;">
                            <input type="submit" value="Enregistrer">
                        </div>
                    </form>

                </tr>
            </table>
            <!--boutton annuler-->
            <div style="text-align: right; margin-top: 15px;">
                <input type="submit" value="Annuler">
            </div>


        </div>



>>>>>>> c1c7e61a14e98834a33bfaab3df6f0eadcf7a446
    </body>
    </html>
<?php


