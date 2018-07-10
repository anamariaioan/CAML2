<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>



    <title>CAML</title>

</head>
<body>

<!--Header-->
    <div class="row" rel="header">
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
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fa fa-user"></span>
                    My account
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Ideas</a>
                    <a class="dropdown-item" href="#">Log out</a>
                </div>
            </div>
        </div>
    </div>
<!--body-->
    <div id="accordions">
        <!--Courses-->
        <div class="card">
            <div class="card-header" id="headingOne">
                <span class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h5><span class="fas fa-book-open"></span> Courses</h5>
                    </button>
                </span>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#headingOne">
                <div class="card card-body">
                    <h6 class="card-title" style="font-weight: bold">Course 1</h6>
                    <div class="card-text">
                        Course 1 description
                        <div>
                            <a href="#" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>
                <div class="card card-body">
                    <h6 class="card-title" style="font-weight: bold">Course 2</h6>
                    <div class="card-text">
                        Course 2 description
                        <div>
                            <a href="#" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Meetings-->
        <div class="card">
            <div class="card-header" id="headingTwo">
                <span class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <h5><span class="fas fa-users"></span><span> Meetings</span></h5>
                    </button>
                </span>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#headingTwo">
                <div class="card card-body">
                    <h6 class="card-title" style="font-weight: bold">Meeting 1</h6>
                    <div class="card-text">
                        Meeting 1 description
                        <div>
                            <a href="#" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>
                <div class="card card-body">
                    <h6 class="card-title" style="font-weight: bold">Meeting 2</h6>
                    <div class="card-text">
                        Meeting 2 description
                        <div>
                            <a href="#" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Ideas-->
        <div class="card">
            <div class="card-header" id="headingThree">
                <span class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <h5><span class="fas fa-lightbulb"></span><span> Ideas</span></h5>
                    </button>
                </span>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#headingThree">
                <div class="card card-body">
                <h6 class="card-title" style="font-weight: bold">Idea 1</h6>
                <div class="card-text">
                    Idea 1 description
                    <div>
                        <a href="#" class="btn btn-primary">Apply</a>
                    </div>
                </div>
                </div>
                <div class="card card-body">
                <h6 class="card-title" style="font-weight: bold">Idea 2</h6>
                <div class="card-text">
                    Idea 2 description
                    <div>
                        <a href="#" class="btn btn-primary">Apply</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
