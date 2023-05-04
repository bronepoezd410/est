    <header>
        <!-- <div class="logo-container"> -->
        <!-- <img src="img/assets/david.png" alt="David's Laboratory Logo" href="/"> -->
        <!-- <a href="/" Target="_blank"><img src="img/assets/david.png"  height="700em" width="150em"> </a> -->
        <!-- <h1>KIPU E-STORE! </h1> -->
        <p><a href="/"><img src="/img/logo2.png" alt="kipu" class="logotip"></a></p>
        <nav>
            <ul>
                <!-- <li><a href="/">Главная</a></li> -->
                <!-- <li><a href="/">Товары</a></li> -->
                <!-- <li><a href="/vendor/addthings.php">Добавить продукт</a></li> -->
                <?php if ($_SESSION["admink"]){ ?> 
                <li><a href="/vendor/addempty.php">Добавить товар</a></li>            
                <li><a href="/vendor/clients.php">Клиенты</a></li>
                <?php } ?>
                <li><a href="/faq.php">Справка</a></li>
                <li><a href="/about.php">О нас</a></li>
                <li><a href="/vendor/account.php">Аккаунт</a></li>
                <!-- <li><a href="/uploadimage.php">Загрузить картинку</a></li> -->
            </ul>
        </nav>
    </header>



    <style>

        
        .logotip {

            /* margin-left: auto; */
            display: block;
            margin-right: auto;
            width: 15%;
            position: absolute; 
            margin-top: auto;
            /* position: relative; */
            top: 0;
        }
    </style>