<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./style.css">

    <title>login system</title>
</head>

<body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark myclass">
        <div class="container ">
            <a class="navbar-brand" href="#">Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Find Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./signup.php">Signout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- main section -->
    <main>
        <!-- top section -->
        <div class="container top-section">
            <h1>This Is An Introduction</h1>
            <p>This project is just me testing out a login system</p>
        </div>
        <!-- bottom section -->
        <div class="container bottom-section">
            <h1>Some categories</h1>
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cool stuff</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                    </div>
                </div>
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">You want to hire me</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>

                    </div>
                </div>
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">please be impressed</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>

                    </div>
                </div>
            </div>
        </div>
    </main>



    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>