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

    <div class="row">
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

        <div class="col-md-6" style="background-color:#005eb7;">
        </div>

        <div class="col-md-3 row form-inline" style="background-color:#005eb7;">
            <div class="dropdown" style="margin-left: 60%">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fa fa-user"></span>
                    My account
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Log out</a>
                </div>
            </div>
        </div>
    </div>

    <div class="sidenav">
        <ul>
            <li><a href="#collapseCourses" data-toggle="collapse" aria-expanded="true" aria-controls="collapseCourses"><span class="fas fa-book-open"></span><span> Courses</span></a></li>
            <li><a href="#collapseMeetings" data-toggle="collapse" aria-expanded="false" aria-controls="collapseMeetings"><span class="fas fa-users"></span><span> Meetings</span></a></li>
            <li><a href="#collapseIdeas" data-toggle="collapse" aria-expanded="false" aria-controls="collapseIdeas"><span class="fas fa-lightbulb"></span><span> Ideas</span></a></li>
            <li></br></br></br></br></br></br></br></br></li>
            <li><button class="btn btn-outline-info btn-sm" data-target=".multi-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="collapseCourses collapseMeetings collapseIdeas"><span class=""></span><span> Show All/Hide All</span></button></li>
        </ul>
    </div>

    <div class="main-page">
        <div class="col">
            <div class="collapsing.show multi-collapse" id="collapseCourses">
                <div class="card card-body">
                        <h5 class="card-title">Course 1</h5>
                    <div class="card-text">
                        Course 1 description
                    </div>
                    <a href="#" class="btn btn-primary">Apply</a>
                </div>
                <div class="card card-body">
                    <h5 class="card-title">Course 2</h5>
                    <div class="card-text">
                        Course 2 description
                    </div>
                    <a href="#" class="btn btn-primary">Apply</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="collapse.show multi-collapse" id="collapseMeetings">
                <div class="card card-body">
                    <h5 class="card-title">Meeting 1</h5>
                    <div class="card-text">
                        Meeting 1 description
                    </div>
                    <a href="#" class="btn btn-primary">Apply</a>
                </div>
                <div class="card card-body">
                    <h5 class="card-title">Meeting 2</h5>
                    <div class="card-text">
                        Meeting 2 description
                    </div>
                    <a href="#" class="btn btn-primary">Apply</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="collapse.show multi-collapse" id="collapseIdeas">
                <div class="card card-body">
                    <h5 class="card-title">Idea 1</h5>
                    <div class="card-text">
                        Idea 1 description
                    </div>
                    <a href="#" class="btn btn-primary">Apply</a>
                </div>
                <div class="card card-body">
                    <h5 class="card-title">Idea 2</h5>
                    <div class="card-text">
                        Idea 2 description
                    </div>
                    <a href="#" class="btn btn-primary">Apply</a>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
