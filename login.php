<?php
require_once 'header.php';
require  'lib/Service/PdoContainer.php';

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
                User authentication
            </h2>
            <form method="POST">
                <div class="form-group">
                    <label for="user_username" id="_username" class="control-label">Username / E-mail</label>
                    <br>
                    <input type="email" class="form-control" id="user_name" name="username" placeholder="Enter Email" required="required">
                    <br>
                    <div class="form-group">
                    <label for="user_password" class="control-label" id="password_">Password</label>
                    <br>
                    <input type="password" class="form-control" id="_password" name="password" placeholder="Password" required="required">
                    </div>
                </div>
                <br>
                <div class="checkbox">
                    <label id="_checkbox">
                        <input type="checkbox" id="_remember_me" name="remember_me" value="1">
                        Remember me
                    </label>
                    <small id="forgot_password">
                        <a href="http://localhost:8000/forgotpage.php" class="user-actions">Forgot password?</a>
                    </small>
                </div>
                <br>
                <div class="login_button">
                    <button type="submit" class="btn btn-primary btn-block" value="Login">Login</button>
                </div>
            </form>
            </div>
        </div>
    </div>
        </body>
    </head>
</html>

