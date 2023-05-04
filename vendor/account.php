<?php require_once '../config/databases.php';
session_start();

if (!isset($_SESSION["login_sess"])) {
  header("location:login.php");
}

$email = $_SESSION["login_email"];
$id = $_SESSION["id"];
$findresult = mysqli_query($induction, "SELECT * FROM customers WHERE email= '$email'");

if ($id == 51){
  $_SESSION["admink"] = true;
}

if ($res = mysqli_fetch_array($findresult)) {
  $name = $res['name'];
  $email = $res['email'];
}
?>
<!DOCTYPE html>
<html>

<head>
  <title> Мой аккаунт</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../styles/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link href="styles/styles.css" rel="stylesheet" />
</head>

<body>


  <div class="container">
    <div class="row">
      <div class="col-sm-3">

      </div>
      <div class="col-sm-6">
        <div class="login_form">
          <p><a href="/"><img src="/img/logo2.png" width="300" height="3  00" alt="logo" class="logo img-fluid"></a></p>
          <div class="row">
            <div class="col"></div>
            <div class="col-6">
              <?php if (isset($_GET['profile_updated'])) { ?>
                <div class="successmsg">Профиль сохранен ..</div>
              <?php } ?>
              <?php if (isset($_GET['password_updated'])) { ?>
                <div class="successmsg">Пароль был изменен...</div>
              <?php } ?>
              <center>
                <?php if ($image == NULL) {
                  echo '<img src="/img/user.jpg" width="100" height="100" ">';
                } else {
                  echo '<img src="images/' . $image . '" style="height:80px;width:auto;border-radius:50%;">';
                } ?>

                <p> Добро пожаловать! <b style="color:black"><?php echo $name; ?> 
                <?php if ($_SESSION["admink"]) { ?>
                <div >Вы админ</div>
              <?php } ?></b> </p>
              </center>
            </div>
            <div class="col">
              <p><a href="logout.php"><span style="color:red;">Выйти</span> </a></p>
            </div>
          </div>

          <table class="table">
            <tr>
              <th>Идентификационный номер: </th>
              <td><?php echo $id; ?></td>
            </tr>
            <tr>
              <th>Имя Фамилия </th>
              <td><?php echo $name; ?></td>
            </tr>

            <th>Email </th>
            <td><?php echo $email; ?></td>
            </tr>
            <th>Заказы </th>
            <td><a href="/vendor/order.php?id=<?=$id?>">Посмотреть заказы</a></td>
            </tr>
          </table>
          <div class="row">
            <div class="col-sm-2">
            </div>
          </div>
        </div>
        <div class="col-sm-3">
        </div>
      </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>


<style>
.btn{

	background-color: green;
	border-color: green;
color: white;
}

.btn:hover{
  background-color: green;
	border-color: green;
  color: black;
}

img {
    display: block;
    margin-left: auto;
    margin-right: auto }

</style>

</html>