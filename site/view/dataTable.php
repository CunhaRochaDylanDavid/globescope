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
<form method="post" action="index.php?action=pageEditer">
    <div class="row">
        <div class="col-md-2">
            <div class="wrapper">
                <!-- Sidebar -->
                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3>Bootstrap Sidebar</h3>
                    </div>

                    <ul class="list-unstyled components">
                        <p>Dummy Heading</p>
                        <li class="active">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li>
                                    <a href="#">Home 1</a>
                                </li>
                                <li>
                                    <a href="#">Home 2</a>
                                </li>
                                <li>
                                    <a href="#">Home 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li>
                                    <a href="#">Page 1</a>
                                </li>
                                <li>
                                    <a href="#">Page 2</a>
                                </li>
                                <li>
                                    <a href="#">Page 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
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
                        echo '<tr>' . '<td style="border: none">' . '<a href="index.php?action=editPage&id=' . $value->IDPlace . '&pseudo=' . $value->Pseudo . '&droit=' . $value->Droit . '&slogan=' . $value->Slogan . '" class="btn btn-secondary btn-sm">Modifier</a>' . '</td>' . '</tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div>
</form>
</body>
<?php