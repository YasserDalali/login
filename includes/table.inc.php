<?php
    require "dbh.inc.php";

    $tr = "";

    $sql = "SELECT * FROM users";
    $results = mysqli_query($cnx, $sql);
    while ($row = mysqli_fetch_assoc($results)) 
    {
        $tr .= "<tr>
        <td>{$row['idUsers']}</td>
        <td>{$row['uidUsers']}</td>

        <td>{$row['pwdUsers']}</td>

        <td>{$row['emailUsers']}</td>
        <td>
        <a href='includes/crud.delete.inc.php?id={$row['idUsers']}' name='delete'><i class='fas fa-trash-can'></a>
    </td>

        </tr>";  

    };