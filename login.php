<!-- header include -->
<?php include_once "./header.php" ?>

<!-- login section -->
<form action="./includes/login.inc.php" method="POST">
    <div class="container">
        <div class="myform">
            <h1>Login</h1>
            <div class="form-group">
                <label for="email">User Info</label>
                <input type="email" class="form-control" name="email" placeholder="Username/Email">
            </div>
            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" name="pwd" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</form>


<?php include_once './footer.php' ?>