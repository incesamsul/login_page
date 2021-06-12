<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ince Samsu Ma'arif</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/incesamsul/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>/incesamsul/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/incesamsul/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/login_style.css">
</head>

<body>
  <div class="login-wrapper">
    <div class="login-side">
      <div class="brand-wrapper">
        <div class="brand-logo">
          <img src="<?= base_url() ?>/assets/img/logo/ecommerce.png">
        </div>
        <div class="brand-name">
          <span>E-Commerce</span>
        </div>
      </div>
      <div class="login-caption">
        <p>Masuk Untuk Melanjutkan ...</p>
        <div id="infoMessage"><?php echo $message; ?></div>
      </div>
      <div class="form-login">
        <form action="" method="POST">
          <div class="input-group">
            <div class="icon-wrapper">
              <i class="fas fa-user-circle login-icon"></i>
            </div>
            <input type="text" class=" form-custom" placeholder="username" name="identity">
          </div>
          <div class="input-group mt-3 mb-3">
            <div class="icon-wrapper">
              <i class="fas fa-key login-icon smaller"></i>
            </div>
            <input type="password" class=" form-custom" placeholder="Password" name="password">
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-5">
              <button type="submit" class="btn btn-block btn-custom" name="signIn">Masuk</button>
            </div>
            <div class="col-7 login-ask">
              <p class="m-0 text-secondary">Lupa Password ?</p>
              <p class="text-bold text-custom">Belum Punya Akun ?</p>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
    </div>
    <div class="ilustration-side text-center">
      <div class="ilustration-caption mt-5">
        <h4 class="text-bold">Tugas E-Bisnis 2</h4>
        <p>Ince samsul ma'arif alqubra - 20182105013 - E-commerce Login Page</p>
      </div>
      <div class="ilustration mt-5">
        <img src="<?= base_url() ?>/assets/img/ilustration/ilustration_login.svg" alt="ilustrasi">
      </div>
    </div>
  </div>
</body>

</html>