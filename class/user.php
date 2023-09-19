<?php

class User
{
    public PDO $pdo;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getUserByLoginPass(string $login, string $pass): mixed
    {
        $sql = "SELECT * FROM user WHERE login = :login AND pass = :pass";
        $result = $this->pdo->prepare($sql);
        $result->execute([
            'login' => $login,
            'pass' => $pass
        ]);
        return $result->fetch(PDO::FETCH_ASSOC);

    }

    public function addUser(string $login, string $pass, string $name): void
    {
        $sql = "INSERT INTO user (login ,pass ,name) VALUES (:login, :pass, :name)";
        $add = $this->pdo->prepare($sql);
        $add->execute([
            'login' => $login,
            'pass' => $pass,
            'name' => $name
        ]);
    }
}