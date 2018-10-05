<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"
            integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9"
            crossorigin="anonymous"></script>
    <script src="public/js/notifications.js"></script>

    <link rel="icon" href="imgs/caml-logo.png">
    <title>CAML</title>
    <?php require __DIR__ . "/dosar.php"; ?>

</head>
<body>

<!--Header-->
<div class="row fixed-top" rel="header">
    <!-- eMAG icon + title-->
    <div class="col-md-3 form-inline" style="background-color:#005eb7;">
        <div class="media">
            <div class="media-left media-middle">
                <div><a href="index.php"><img class="lgo-icon" src="imgs/logo.png"></a></div>
            </div>
            <div class="media-body">
                <h1 class="lgo">CAML</h1>
            </div>
        </div>
    </div>
    <!--blue blank-->
    <div class="col-md-6" style="background-color:#005eb7;">
    </div>
    <!--My account-->
    <div class="col-md-3 row form-inline" style="background-color:#005eb7;">
        <div class="dropdown" style="margin-left: 60%">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                <span class="fa fa-user"></span>
                My account
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="new-ideas.php">Ideas</a>
                <a class="dropdown-item" href="#">Log out</a>
            </div>
        </div>
    </div>
</div>
<!--Modal Notifications-->
<div class="modal fade" id="ModalNotifications">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!--             Modal Header-->
            <div class="modal-header">
                <h4 class="modal-title">Notifications</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!--Modal body-->
            <div id="modalNotificationsBody" class="modal-body">
                <table class="table table-striped">
                    <tbody id="notification-list">
                    </tbody>
                </table>
            </div>
            <!--Modal footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 row form-inline fixed-bottom">
    <div class="col-md-2">
        <a href="#" id="btnNotifications" class="btn btn-info btn-lg sticky-bottom" data-toggle="modal"
           data-target="#ModalNotifications">
            <span class="fas fa-bell"></span>
        </a>
        &nbsp
    </div>
    <div class="col-md-10">
    </div>
    &nbsp
</div>
</body>
</html>