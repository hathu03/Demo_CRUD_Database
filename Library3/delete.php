<?php
include_once "DBcon.php";
$db = new DBcon();
if (isset($_REQUEST["id"])) {
    $book = $db->delete($_REQUEST["id"]);
    header("location:list.php");
}