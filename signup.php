<!-- header include -->
<?php include_once "./header.php" ?>

<!-- signup section -->
<form action="./includes/signup.inc.php" method="POST">
    <div class="container">
        <div class="myform">
            <h1>Signup</h1>
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" class="form-control" name="name" placeholder="Enter your fullname">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="uid">User ID: </label>
                <input type="text" name="uid" class="form-control" placeholder="Enter a cool username">
            </div>

            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" name="pwd" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="pwdrepeat">Password Confirm</label>
                <input type="password" name="pwdRepeat" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <button name='submit' type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p class='danger'>Fill in all fields</p>";
                } else if ($_GET["error"] == "invaliduid") {
                    echo "<p class='danger'>Choose a proper user name</p>";
                } else if ($_GET["error"] == "invalidemail") {
                    echo "<p class='danger'>Choose a proper user email</p>";
                } else if ($_GET["error"] == "pwdmatcherror") {
                    echo "<p class='danger'>Choose a proper user passwords dont match</p>";
                } else if ($_GET["error"] == "uidtaken") {
                    echo "<p class='danger'>userame already taken</p>";
                } else if ($_GET["error"] == "stmtfailed") {
                    echo "<p class='danger'>Something went wrong, try again</p>";
                } else if ($_GET["error"] == "none") {
                    echo "<p class='primary'>You have signed up!</p>";
                }
            }
            ?>
        </div>

    </div>
</form>




<?php include_once './footer.php' ?>