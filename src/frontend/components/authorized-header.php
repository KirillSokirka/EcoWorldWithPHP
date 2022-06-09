<div class="authorized">
            <div class="header">
                <a href="#" aria-haspopup="true">Вітаю, <?php
                    session_start();
                    echo $_SESSION["name"];
                    ?></a>
                <img alt="Arrow" id="arrows">
            </div>
            <div class="content">
                <ul class="dropdown" aria-label="submenu">
                    <li><a href="src/html/create-announcment.html">Створити оголошення</a></li>
                    <hr>
                    <li><a href="#">Мої оголошення</a></li>
                    <li><a href="#">Вподобані оголошення</a></li>
                    <hr>
                    <li><a href="backend/auth/exit.php">Вихід</a></li>
                </ul>
            </div>
</div>