<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 11.07.2018
 * Time: 17:44
 */

$configuration = [
    'db_dsn'  => 'mysql:host=gen-centos729942-all-dev.newton.c.emag.network;dbname=CAML',
    'db_user' => 'root',
    'db_pass' => '0000'
];

require_once __DIR__.'/lib/Model/Idea.php';
require_once __DIR__ .'/lib/Service/PdoContainer.php';
require_once __DIR__.'/lib/Service/IdeasLoader.php';
<<<<<<< HEAD
require_once __DIR__ . '/idea-saved.php';
require_once __DIR__ . '/header-myaccount.html';
require_once __DIR__.'/lib/Model/Rating.php';
require_once __DIR__.'/lib/Service/RatingLoader.php';
require_once __DIR__. '/lib/Model/Courses.php';
require_once __DIR__. '/lib/Service/CoursesLoader.php';
=======
require_once __DIR__.'/lib/Service/VotesIncrement.php';
require_once __DIR__ . '/header-myaccount.html';
>>>>>>> f4f6234ba3b9d0564e158434f74deab83380bf8e
