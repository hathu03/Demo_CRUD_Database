<?php
include_once "DBConnect.php";
$db = new DBConnect();
if (isset($_REQUEST["id"])) {
    $book = $db->delete($_REQUEST["id"]);
    header("location:list.php");
}