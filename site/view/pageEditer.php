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
    <!-- tout le tableau-->
    <div class="container">
        <div class="row">
<<<<<<< HEAD
            <div class="col-md-12">
                <table class="table-responsive">
                    <tr>
                        <th>ID</th>
                        <th>Pseudo</th>
                        <th>Droit</th>
                        <th>Slogan</th>
                    </tr>

                    <tr>
                        <form action="index.php?action=pageEditer" method="POST">
                            <td><?= $_GET['code'];?></td>
                            <td><?= $_GET['pseudo'];?></td>
                            <td><?= $_GET['droit'];?></td>
                            <td><?= $_GET['slogan'];?></td>
                        </form>
                    </tr>
                </table>
                <!--boutton enregistrer-->
                <div style="text-align: right; margin-top: 15px;">
                    <input type="submit" value="Enregistrer">
                    <input type="submit" value="Annuler">
                </div>
=======
            <table class="table-responsive">
                <tr>
                    <th>ID</th>
                    <th>Pseudo</th>
                    <th>Pays</th>
                    <th>Ville</th>
                </tr>

                <tr>
                    <form action="index.php?action=pageEditer" method="POST">
                        <td><?= $_GET["id"];?></td>
                        <td><input type="text" value=<?= $_GET["pseudo"];?> ></td>
                        <td><input type="text" value=<?= $_GET["droit"];?>></td>
                        <td><input type="text" value=<?= $_GET["slogan"];?>></td>

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
>>>>>>> a0035ac4f774b9c874bb447d776c4351f55db14d
            </div>


        </div>



    </body>
    </html>
<?php


