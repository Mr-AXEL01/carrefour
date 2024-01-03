

<?php require APPROOT . '/views/inc/header.php'; ?>

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="<?= URLROOT . '/images/imagelogin.png'?>"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form>
        <div class="container mt-5">
  <h1 class="display-4 font-weight-bold ">Welcome Back :)</h1>
  <p class="lead text-sm-start">"Bienvenue chez Carrefour ! Découvrez un univers de choix, 
    de qualité et d'offres personnalisées pour une expérience shopping exceptionnelle."</p>
</div>
         
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" placeholder="email" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13"></label>
          </div>

         
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" placeholder="password"class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23"></label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="<?= URLROOT . '/client/password'?>">Forgot password?</a>
          </div>

          <button type="submit" class="login-button btn btn-primary btn-lg btn-block">Login Now</button>
          <button type="submit" class="login-btn btn btn-light btn-lg btn-block">Create Account</button>


        </form>
      </div>
    </div>
  </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>