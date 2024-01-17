<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spalten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
<script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg mb-4 ps-5">
    <a class="navbar-brand" href="<?php echo base_url();?>">
        <img src="<?php echo base_url();?>06_-_WE_Logo.svg" alt="logo.svg" height="60">
    </a>
    <div class="collapse navbar-collapse" >
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link active bold-text" aria-current="page" href="<?php echo base_url();?>">Tasks</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link active bold-text" aria-current="page" href="#">Boards</a>
            </li>


            <li class="nav-item active">
                <a class="nav-link active bold-text" aria-current="page" href="<?php echo base_url();?>Spalten">Spalten</a>
            </li>

        </ul>
    </div>
</nav>


<?= $this->renderSection('content') ?>





<!-- Footer -->
<footer>
    <div class="container pt-5 pb-4">
        <div class="row">
            <div class="col-md-4">
                ©Web-Entwicklung Team 2023
            </div>

            <div class="col-md-auto ms-md-auto">
                <p class="text-end">
                    Impressum
                </p>
            </div>
            <div class="col-md-auto">
                <p class="text-end">
                    Datenschutz
                </p>
            </div>
            <div class="col-md-auto">
                <p class="text-end">
                    Kontakt
                </p>
            </div>
        </div>
    </div>
</footer>


</body>
</html>
