<?php
include_once "DBConnect.php";
$db = new DBConnect();
$connect = $db ->connect();
$books = $db ->getAll();
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
<a href="add.php">Add new</a>
<table border="1px">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Author</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?php echo $book["id"] ?></td>
            <td><?php echo $book["name"] ?></td>
            <td><?php echo $book["author"] ?></td>
            <td><a href="delete.php?id=<?php echo $book["id"]?>" onclick="return confirm('May chac chua?')">Delete</a></td>
            <td><a href="update.php?id=<?php echo $book["id"]?>">Update</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
