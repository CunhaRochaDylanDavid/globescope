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
<form method="post" action="index.php?action=selectModif">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
            <table style="color: white" class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Pseudo</th>
                    <th>Droit</th>
                    <th>Slogan</th>
                </tr>
                <?php
                foreach ($_GET['data'] as $userData) {
                    foreach ($userData as $value) {
                        echo '<tr>' . '<td>' . $value->IDPlace . '</td>', '<td>' . $value->Pseudo . '</td>',
                            '<td>' . $value->Droit . '</td>', '<td>' . $value->Slogan . '</td>' . '</tr>';
                    }
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
                foreach ($_GET['data'] as $userData) {
                    foreach ($userData as $value) {
                        echo '<tr>' . '<td style="border: 0px">' . '<a style="color: white; font-size: 16px; font-family: arial, sans-serif" name=".$value->IDPlace.">Modifier</a>' . '</td>' . '</tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div>
</form>
</body>
<?php