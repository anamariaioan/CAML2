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
require_once __DIR__.'/lib/Model/Course.php';
require_once __DIR__ . '/lib/Service/PdoContainer.php';
require_once __DIR__.'/lib/Service/CoursesLoader.php';
require_once __DIR__.'/lib/Service/MeetingsLoader.php';
require_once __DIR__.'/lib/Service/IdeaService.php';