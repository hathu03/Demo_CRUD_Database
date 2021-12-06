<?php
include_once "DBCN.php";
$db = new DBCN();
if (isset($_REQUEST["id"])) {
    $book = $db->delete($_REQUEST["id"]);
    header("location:list.php");
}