<?php
include_once "DBConnect.php";
$db = new DBConnect();
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
    <input type="text" name="name" placeholder="Book name">
    <input type="text" name="author" placeholder="Author name">
    <button>Add</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book = $db->add($_REQUEST);
    header("location:list.php");
}