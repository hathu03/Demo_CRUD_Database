<?php
include_once "DBCN.php";
$db = new DBCN();
$connect = $db ->connect();
$books = $db->getAll();
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
    <table border="1px">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Author</th>
            <th>Action</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?php echo $book["id"]?></td>
            <td><?php echo $book["name"]?></td>
            <td><?php echo $book["author"]?></td>
            <td><a href="add.php">Add</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
