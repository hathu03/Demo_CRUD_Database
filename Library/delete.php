<?php
include_once "DB.php";
$db = new DB();
if (isset($_REQUEST["id"])) {
    $book = $db->delete($_REQUEST["id"]);
    header("location:list.php");
}
