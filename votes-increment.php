<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 10.08.2018
 * Time: 14:34
 */

namespace Service;

require_once 'header-myaccount.php';
require __DIR__ . "/dosar.php";

?>

<!DOCTYPE html>
<html>
    <body class="body">
        <?php

        $pdo = new PdoContainer($configuration);
        $idIdea = $_GET["id"];
        $pdo->incrementVotes($idIdea);
        $pdo->addNotificationForVotes($idIdea);

        ?>

        <div class="body jumbotron ">
            <div class="text-center crimson">
                <h4>
                    The Caml thanks you for your vote <a href="index.php"><img src="imgs/caml-logo.png" class="logo-caml"></a>
                </h4>
                <h5>
                    "Don't forget to check your notifications. We will inform you in case the idea < insert things here >";
                </h5>
            </div>
            <div>
                </br></br></br>
            </div>
            <div class="text-right" style="color: darkgray">
                <h6>Tip: The Caml knows some tricks. Click it!</h6>
            </div>
        </div>
    </body>
</html>
