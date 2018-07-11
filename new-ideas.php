<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 11.07.2018
 * Time: 13:08
 */

require __DIR__ . '/header-myaccount.html';
?>

<!DOCTYPE html>
<html>
<body>
    <div class="body jumbotron ">
        <form class="needs-validation">
            <div>
                <h5 class="display-4 text-left crimson">
                    Suggest a meeting or a course <img src="imgs/caml-logo.png" class="logo-caml">
                </h5>
            </div>
            <div class="lead text-left">
                <footer class="blockquote-footer">Share your suggestion for a meeting or a course and if anyone finds it useful, it will be voted.</footer>
            </div>
            <hr class="my-4">
            <div class="form-group">
                <label for="ideaType" class="crimson">You would like to suggest a</label>
                <select class="form-control" id="ideaType">
                    <option>Course</option>
                    <option>Meeting</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ideaTitle" class="crimson">Title</label>
                <input type="text" class="form-control" id="ideaTitle" placeholder="What is this all about?" required>
            </div>
            <div class="form-group">
                <label for="ideaDescription" class="crimson">Description</label>
                <textarea class="form-control" id="ideaDescription" rows="3" placeholder="Tell us more :)" required></textarea>
            </div>
            <div align="right">
                <button type="submit" class="btn btn-primary">May the votes be with you</button>
            </div>
        </form>
    </div>
</body>
</html>
