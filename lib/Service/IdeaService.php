<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 13.07.2018
 * Time: 16:39
 */

namespace Service;

require_once __DIR__."/../../dosar.php";

class IdeaService
{
    $pdo = new PdoContainer($configuration);

    $ideaType = $_POST['ideaType'];
    $ideaTitle = $_POST['ideaTitle'];
    $ideaDescription = $_POST['ideaDescription'];

    $pdo->insertIdea($_POST);
    
}



