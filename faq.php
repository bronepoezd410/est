<?php include 'navbar.php'; ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Справка по покупкам</title>
  </head>
  <body>
    <h1>Справка по покупкам</h1>
    
    <nav>
      <ul>
        <li><a href="#how-to-buy">Как купить товар?</a></li>
        <li><a href="#account">Зачем нужен аккаунт?</a></li>
      </ul>
    </nav>
    
    <hr>
    
    <section id="how-to-buy">
      <h2>Как купить товар?</h2>
      <p>Для того, чтобы купить товар на нашем веб-сайте, следуйте простым шагам:</p>
      <ol>

        <li>Зарегестрируйтесь, затем выполните вход в аккаунт.</li>
        <li>Перейдите на главную страницу.</li>
        <li>Выберите интересующий вас товар из каталога.</li>
        <li>Перейдите на страницу товара, нажав кнопку "Перейти к покупке".</li>
        <li>Если продукт есть в наличии, нажмите кнопку "КУПИТЬ".</li>
        <li>Далее введите свой номер телефона и ожидайте звонка.</li>
        <li>Информации о заказе вы можете посмотреть в личном кабинете (Аккаунт).</li>
        <li>При желании оставьте отзыв о товаре.</li>
      </ol>
      <p>Если у вас возникли проблемы с покупкой, свяжитесь с нашей службой поддержки.</p>
    </section>
    
    <hr>
    
    <section id="account">
      <h2>Зачем нужен аккаунт?</h2>
      <p>Для удобства покупок мы рекомендуем создать аккаунт на нашем веб-сайте. Это позволит вам:</p>
      <ul>
        <li>Делать покупки.</li>
      </ul>
      <p>Чтобы создать аккаунт, перейдите на страницу "Аккаунт" в правом верхнем углу страницы и заполните необходимые поля.</p>
    </section>
    
  </body>
</html>

<style>
      body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        margin: 0;
        padding: 0;
      }
      
      h1, h2 {
        text-align: center;
        margin: 30px 0;
      }
      
      nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
      }
      
      nav li {
        margin: 0 20px;
      }
      
      nav a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 18px;
      }
      
      nav a:hover {
        color: #555;
      }
      
      hr {
        margin: 30px 0;
        border: none;
        border-top: 1px solid #ccc;
      }
      
      ol {
        padding-left: 20px;
      }
      
      ul {
        padding-left: 20px;
      }
    </style>