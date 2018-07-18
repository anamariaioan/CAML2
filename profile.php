<?php

require __DIR__ . '/header-myaccount.html';

?>
<!DOCTYPE html>
<html>
<body>
<!---Profile Container--->
<div class="body container">
    <div class="row">
        <div class="col-md-offset-2 col-md-12 col-lg-offset-3 col-lg-6">
            <div class="well profile">
                <div class="col-md-12">
                    <div class="col-md-12 col-sm-8">
                        <h2>Nicole Pearson</h2>
                        <h2>Team: Wonder</h2>
                        <p><strong>About: </strong> Web Designer / UI. </p>
                        <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
                        <p><strong>Skills: </strong>
                            <span class="tags">html5</span>
                            <span class="tags">css3</span>
                            <span class="tags">jquery</span>
                            <span class="tags">bootstrap3</span>
                        </p>
                    </div>
                    <div class="col-md-12 col-sm-4 text-center">
                        <figure>
                            <img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">
                            <figcaption class="ratings">
                                <p>Ratings
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-12 divider text-center row">
                    <div class="col-md-4 emphasis">
                        <h2><strong> 20,7K </strong></h2>
                        <p><small>Courses</small></p>
                        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal-courses" ><span class="fa fa-book-open"></span> Courses </button>
                        <div class="modal fade" id="myModal-courses">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Courses</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <ul class="alert alert-success" role="alert">Course 1</ul>
                                        <ul class="alert alert-danger" role="alert">Course 2</ul>
                                        <ul class="alert alert-warning" role="alert">Course 3</ul>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong>245</strong></h2>
                        <p><small>Meetings</small></p>
                        <button class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal-meetings"><span class="fa fa-users"></span> Meetings </button>
                        <div class="modal fade" id="myModal-meetings">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Meetings</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <ul class="alert alert-success" role="alert">Meeting 1</ul>
                                        <ul class="alert alert-danger" role="alert">Meeting 2</ul>
                                        <ul class="alert alert-warning" role="alert">Meeting 3</ul>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong>245</strong></h2>
                        <p><small>Points</small></p>
                        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal-option"><span class="fa fa-cogs"></span> Options </button>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModal-option">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Personal Info</h4><img src="imgs/caml-logo.png" id="logo-caml">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <ul>Mail:dsfdf@emag.ro</ul>
                                        <ul type="password">Password:*******</ul>
                                        <input type="text" class="form-control" placeholder="Change Password" aria-label="Change Password" aria-describedby="basic-addon1">
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





</body>
</html>
