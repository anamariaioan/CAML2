<?php
require_once 'header.html';

?>


<html>
    <head>
        <title>
            Login
        </title>
        <body class="main-content">
            <div class="page-content">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>
                         Forgot Password
                        </h2>
                        <form method="post">
                            <div class="form-group">
                                <label for="user_username" id="_username" class="control-label">Username / E-mail</label>
                                <br>
                                <input type="email" class="form-control" id="user_name" name="username" placeholder="Enter Email" required="required">
                            </div>
                            <div class="redirect_back float-left">
                                <small>
                                    <a href="http://localhost:8000/Login.php" class="user-actions_forgot">Back to authentication</a>
                                </small>
                            </div>
                            <br>
                                <div class="row float-right">
                                    <div class="col-md-12 float-right continue_button">
                                        <button type="submit" class="btn btn-primary btn-block float-right" value="Continue">Continue</button>
                                    </div>
                                </div>
                            <br>

                        </form>

                </div>
            </div>
        </body>
    </head>
</html>
