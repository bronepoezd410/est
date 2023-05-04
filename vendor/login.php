<!DOCTYPE html>
<?php require_once '../config/databases.php'; ?>
<html>

<head><br>
  <title> Логин - E-KIPU STORE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
        <div class="login_form">
          <form action="login_process.php" method="POST">

            <div class="form-group">
              <p><a href="/"><img src="/img/logo2.png" alt="kipu" class="logo img-fluid"></a></p>
              <?php

              if (isset($_GET['loginerror'])) {
                $loginerror = $_GET['loginerror'];
              }
              if (!empty($loginerror)) {
                echo '<p class="errmsg">Аккаунт не найден. Повторите попытку или зарегистрируйтесь.</p>';
              } ?>

              <label class="label_txt">Электронная почта </label>
              <input type="text" name="login_var" value="<?php if (!empty($loginerror)) {
                                                            echo  $loginerror;
                                                          } ?>" class="form-control" required="">
            </div>
            <div class="form-group">
              <label class="label_txt">Пароль </label>
              <input type="password" name="password" class="form-control" required="">
            </div>
            <button type="submit" name="sublogin" class="btn btn-primary btn-group-lg form_btn">Войти</button>
          </form>

          <br>
          <p>Нет аккаунта? <a href="signup.php">Создать</a> </p>
        </div>
        <div class="col-sm-4">
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>



<style>
  .btn {

    background-color: green;
    border-color: green;
    color: white;
  }

  .btn:hover {
    background-color: green;
    border-color: green;
    color: black;
  }

  img {
    display: block;
    margin-left: auto;
    margin-right: auto
  }
</style>

</html>