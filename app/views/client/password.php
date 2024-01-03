
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/1a53866afa.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo URLROOT;?>/css/style.css">

    <!-- links for footer -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <title><?php echo SITENAME; ?></title>
</head>

<body>
    <div class=""> <!-- Begin Main Container -->

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card text-center" style="width: 400px;">
        <div class="card-header h5 text-white bg-primary">Password Reset</div>
        <div class="card-body px-5">
            <p class="card-text py-2">
                Enter your email address and we'll send you an email with instructions to reset your password.
            </p>
            <div class="form-outline">
                <input type="email" id="typeEmail" placeholder="Email input"class="form-control my-3" />
                <label class="form-label" for="typeEmail"></label>
            </div>
            <a href="#" class="btn btn-primary w-100">Reset password</a>
            <div class="d-flex justify-content-between mt-4">
                <a class="" href="<?= URLROOT . '/client/login'?>">Login</a>
                <a class="" href="#">Register</a>
            </div>
        </div>
    </div>
</div>


