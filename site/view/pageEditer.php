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
    </head>
    <body>
    <table>
        <tr>
            <th>ID</th>
            <th>Pseudo</th>
            <th>Droit</th>
            <th>Slogan</th>
        </tr>
        <tr>
            <form action="index.php?action=pageEditor" method="POST">
                <td><input type="text"></td>
                <td><input type="text" name="valeur2"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td></td>
                <input type="submit" value="Modifier">
            </form>
        </tr>
    </table>
    </body>
    </html>
<?php



