<!-- header include -->
<?php include_once "./header.php" ?>

<!-- login section -->
<form action="./includes/login.inc.php" method="POST">
    <div class="container">
        <div class="myform">
            <h1>Login</h1>
            <div class="form-group">
                <label for="uid">User Info</label>
                <input type="text" class="form-control" name="uid" placeholder="Username/Email">
            </div>
            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" name="pwd" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </div>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p class='danger'>Fill in all fields</p>";
                } else if ($_GET["error"] == "wronglogin") {
                    echo "<p class='danger'>incorrect login info</p>";
                }
            }
            ?>
        </div>
    </div>
</form>


<?php include_once './footer.php' ?>