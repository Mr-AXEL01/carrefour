
<?php require APPROOT . '/views/inc/header.php'; ?>

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


<?php require APPROOT . '/views/inc/footer.php'; ?>
