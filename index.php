<?php



require __DIR__ .'/header-myaccount.html';
require __DIR__.'/dosar.php';

?>

<!DOCTYPE html>
<html>
<body class="body">

<?php
use Service\PdoContainer;

$container = new PdoContainer($configuration);
$courses =$container->getCoursesLoader();

?>

<!--body-->
    <div id="accordions" class="body">
        <!--Courses-->
        <div class="card">
            <button class="btn btn-link crimson" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <span class="mb-0" id="headingOne">
                    <h5><span class="fas fa-book-open"></span><span> Courses</span></h5>
                </span>
            </button>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#headingOne">
                <?php foreach ($courses as $course): ?>
                    <div class="card card-body">
                        <h6 class="card-title" style="font-weight: bold"><?php echo $course['title']; ?></h6>
                        <div class="card-text">
                            <?php echo $course['description']; ?>
                            <div>
                                <a href="#" class="btn btn-primary">Apply</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--Meetings-->
        <div class="card">
            <button class="btn btn-link crimson" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <span class="mb-0" id="headingTwo">
                    <h5><span class="fas fa-users"></span><span> Meetings</span></h5>
                </span>
            </button>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#headingTwo">
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
            <button class="btn btn-link crimson" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                <span class="mb-0" id="headingThree">
                    <h5><span class="fas fa-lightbulb"></span><span> Ideas</span></h5>
                </span>
            </button>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#headingThree">
                <div class="card card-body">
                <h6 class="card-title" style="font-weight: bold">Idea 1</h6>
                <div class="card-text">
                    Idea 1 description
                    <div>
                        <a href="#" class="btn btn-primary">Vote</a>
                    </div>
                </div>
                </div>
                <div class="card card-body">
                <h6 class="card-title" style="font-weight: bold">Idea 2</h6>
                <div class="card-text">
                    Idea 2 description
                    <div>
                        <a href="#" class="btn btn-primary">Vote</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
