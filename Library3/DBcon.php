<?php

class DBcon
{
    protected $dsn;
    protected $username;
    protected $password;

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
        } catch (PDOException $e) {
            die($e->getMessage());
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

    public function update($request)
    {
        $id = $request['id'];
        $name = $request['name'];
        $author = $request['author'];
        $sql = "update book set name='$name', author='$author' where id=".$id;
        $result = $this->connect()->query($sql);
        return $result->fetch();
    }

    public function getById($id)
    {
        $sql = "select * from book where id=".$id;
        $result = $this->connect()->query($sql);
        return $result->fetch();
    }
}