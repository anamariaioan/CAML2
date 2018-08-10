<?php
/**
 * Created by PhpStorm.
 * User: georgiana.puiu
 * Date: 8/10/2018
 * Time: 4:47 PM
 */

namespace Service;
use PDO;


class LoginUsers
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getuser()
    {
        $usernameLogin = $this->pdo->prepare('SELECT * FROM users');
        $usernameLogin ->execute();

        $usersLogin = $usernameLogin->fetchAll(PDO::FETCH_ASSOC);

        return $usersLogin;
    }
}