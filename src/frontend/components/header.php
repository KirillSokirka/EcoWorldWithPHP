<header class="header">
    <div class="logo">
        <a href="index.html"><img src="images/planet-earth.svg" alt="Logo"></a>
    </div>
    <div class="menu">
        <?php
            require ('backend/Database.php');
        $db = new PDO
        ("mysql:host=localhost;port=3306;dbname=ecoworld"
            , "root", "aa4938nr");
        ?>
        <!-- <div class="not-authorized">
            <a type='button' id="signIn-btn">Sign In</a>
            <a type='button' id="signUp-btn">Sign Up</a>
        </div> -->
        <div class="authorized">
            <div class="header">
                <a href="#" aria-haspopup="true">Вітаю, username</a>
                <img alt="Arrow" id="arrows">
            </div>
            <div class="content">
                <ul class="dropdown" aria-label="submenu">
                    <li><a href="src/html/create-announcment.html">Створити оголошення</a></li>
                    <hr>
                    <li><a href="#">Мої оголошення</a></li>
                    <li><a href="#">Вподобані оголошення</a></li>
                    <hr>
                    <li><a href="#">Вихід</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <a href="src/html/menu-page.html">
            <img src="images/menu-hambuger.svg" class="menu-button" alt="Menu">
        </a>
    </div>
    </div>
</header>