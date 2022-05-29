<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/theme/css/bootstrap.css">
    <title><?php if(isset($headerTitle)) {echo $headerTitle; } else { echo "Undefined"; }  ?></title>
</head>

<body>
    <!-- START HEADER -->
    <header class="mb-5">
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">LOGO JMBG SITE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">JMBG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
     <!-- END HEADER -->