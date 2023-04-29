<!DOCTYPE html>
<?php
require_once '../config/databases.php'; ?>
<html>

<head>
    <title> Регистрация </title>
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
            <p><a href="/"><img src="/img/logo2.png" alt="kipu" class="logo img-fluid"></a></p>

            </div>

            <div class="col-sm-4">
            </div>
        </div>

        <div class="row">
            <?php
            if (isset($_POST['signup'])) {

                extract($_POST);

                if (strlen($name) < 3) { 
                    $error[] = 'Минимум три символа.';
                }
                if (strlen($name) > 20) {
                    $error[] = 'Имя больше 20 символов запрещено.';
                }
                if (!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $name)) {
                    $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
                }

                if (strlen($email) > 50) {
                    $error[] = 'Адрес электронной почты не может быть длиннее 20 символов';
                }
                if ($passwordConfirm == '') {
                    $error[] = 'Подтвердите пароль.';
                }
                if ($password != $passwordConfirm) {
                    $error[] = 'Введенные пароли не совпадают.';
                }
                if (strlen($password) < 5) { // min 
                    $error[] = 'Длина пароля - минимум 6 символов.';
                }

                if (strlen($password) > 20) { // Max 
                    $error[] = 'Длина пароля больше 20 символов запрещена.';
                }

                $sql = "SELECT * FROM `customers` WHERE 1=1";
                $result = mysqli_query($induction, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    if ($name == $row['name']) {
                    }
                    if ($email == $row['email']) {
                        $error[] = 'Адрес уже зарегистрирован.';
                    }
                }

                if (!isset($error)) {
                    $result = mysqli_query($induction, "INSERT into customers (name,email,password) values('$name','$email','$password')");

                    if ($result) {
                        $done = 2;
                    } else {
                        $error[] = 'Неудачно : Что-то пошло не так';
                    }
                }
            }
            ?>

            <div class="col-sm-4">

                <?php
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<p class="errmsg">&#x26A0;' . $error . ' </p>';
                    }
                }
                ?>
            </div>


            <div class="col-sm-4">
                <?php if (isset($done)) { ?>
                    <div class="successmsg"><span style="font-size:100px;">&#9989;</span> <br> Регистрация успеша. <br> <a href="login.php" style="color:green">Войти </a> </div>

                <?php } else { ?>

                    <div class="signup_form">
                        <form action="" method="POST">

                            <div class="form-group">
                                <label class="label_txt">Фамилия Имя</label>
                                <input type="text" class="form-control" name="name" value="<?php if (isset($error)) {
                                                                                                echo $_POST['name'];
                                                                                            } ?>" required="">
                            </div>

                            <div class="form-group">
                                <label class="label_txt">Электронная почта </label>
                                <input type="email" class="form-control" name="email" value="<?php if (isset($error)) {
                                                                                                    echo $_POST['email'];
                                                                                                } ?>" required="">
                            </div>

                            <div class="form-group">
                                <label class="label_txt">Пароль </label>
                                <input type="password" name="password" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label class="label_txt">Подтвердить пароль </label>
                                <input type="password" name="passwordConfirm" class="form-control" required="">
                            </div>

                            <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn">Зарегистрироваться</button>

                            <p>Уже есть аккаунт? <a href="login.php">Войти</a> </p>
                        </form>
                    <?php } ?>
                    </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>


<style>
    body {
        background: #EAE9E5;
    }

    .login_form {
        margin-top: 25%;
        background: #fff;
        padding: 30px;
        box-shadow: 0px 1px 36px 5px rgba(0, 0, 0, 0.28);
        border-radius: 5px;
    }

    .form_btn {
        background: #fb641b;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .2);
        border: none;
        color: #fff;
        width: 100%
    }

    .label_txt {
        font-size: 12px;
    }

    .form-control {
        border-radius: 25px
    }

    .signup_form {
        background: #fff;
        padding-left: 25px;
        padding-right: 25px;
        padding-bottom: 5px;
        box-shadow: 0px 1px 36px 5px rgba(0, 0, 0, 0.28);
        border-radius: 5px;
    }

    .logo {
        width: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .errmsg {
        margin: 2px auto;
        border-radius: 5px;
        border: 1px solid red;
        background: pink;
        text-align: left;
        color: brown;
        padding: 1px;
    }

    .successmsg {
        margin: 5px auto;
        border-radius: 5px;
        border: 1px solid green;
        background: #33CC00;
        text-align: left;
        color: white;
        padding: 10px;
    }


    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 150%;
    }

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
</style>

</html>