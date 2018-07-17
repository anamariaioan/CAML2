<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 13.07.2018
 * Time: 16:39
 */

namespace Service;

require_once __DIR__."/../../dosar.php";


$pdo = new PdoContainer($configuration);

if(!empty($_POST)) {
    $pdo->insertIdea($_POST);
}