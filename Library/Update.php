<?php
include_once "DB.php";
$db = new DB();
$id = $_REQUEST["id"];
$book = $db->getById($id);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book = $db->update($_REQUEST);
    header("location:list.php");
}
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter new book name" value="<?php echo $book['name']?>">
        <input type="text" name="author" placeholder="Enter new author name" value="<?php echo $book['author']?>">
        <button>Update</button>
    </form>
    </body>
    </html>
<?php

