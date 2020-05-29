<?php
/**
 * Created by PhpStorm.
 * User: vladislavmac
 * Date: 07/04/2019
 * Time: 02:55
 */

include 'config/db.php';

if (isset($_POST['name'])) {

    $column = $_POST['name'];
    $newValue = $_POST['value'];
    $id = $_POST['pk'];
    $sql = "UPDATE `post` SET $column = '$newValue' where id = $id";
    mysqli_query($link, $sql);
}