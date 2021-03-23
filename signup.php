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
                <input type="password" name="pwdrepeat" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>


<?php include_once './footer.php' ?>