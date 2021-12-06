<?php

class DBCN
{
    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=demo_library;charset=utf8";
        $this->username = "root";
        $this->password = "";
    }

    public function connect()
    {
        try {
            $connect = new PDO($this->dsn, $this->username, $this->password);
            return $connect;
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function getAll()
    {
        $sql = "select * from book";
        $result = $this->connect()->query($sql);
        return $result->fetchAll();
    }

    public function add($request)
    {
        $name = $request["name"];
        $author = $request["author"];
        $sql = "insert into book (name, author) values ('$name', '$author')";
        $result = $this->connect()->query($sql);
        return $result->fetch();
    }

    public function delete($id)
    {
        $sql = "delete from book where id=".$id;
        $result = $this->connect()->query($sql);
        return $result->fetch();
    }

}