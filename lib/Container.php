<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 11.07.2018
 * Time: 17:38
 */

class Container
{
    private $configuration;

    private $pdo;

    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getPdo()
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO(
                $this->configuration['db_user'],
                $this->configuration['db_user'],
                $this->configuration['db_pass']
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }

        return $this->pdo;
    }
}