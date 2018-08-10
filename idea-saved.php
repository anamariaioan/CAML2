<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 13.07.2018
 * Time: 16:39
 */

namespace Service;

require __DIR__ . "/dosar.php";

?>

<!DOCTYPE html>
<html>
<body class="body">
    <?php

    $pdo = new PdoContainer($configuration);

    if(!empty($_POST)) {
        $pdo->insertIdea($_POST);
        $ideaId = $pdo->selectIdeaId();
        $pdo->insertVotesForIdea($ideaId);
    };

    ?>

    <div class="body jumbotron ">
        <div class="text-center crimson">
            <h4>
                Yey! The Caml is happy and it will try to bring you a lot of votes. <a href="index.php"><img src="imgs/caml-logo.png" class="logo-caml"></a>
            </h4>
            <h5>
                Meanwhile, enjoy a cup of coffee or tea. We will let you know if your idea is a winning one.
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
