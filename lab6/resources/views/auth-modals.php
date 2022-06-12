<div id="signIn-modal" class="auth-modal">

    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Вітаємо знову!</p>
        <form action="backend/auth/login.php" method="post">
            <input class="info-input" name="login" placeholder="Пошта">
            <input class="info-input" name="password" placeholder="Пароль">
            <button type="submit">Вхід</button>
        </form>
    </div>

</div>

<div id="signUp-modal" class="auth-modal">

    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Вітаємо!</p>
        <form id="form" action="backend/auth/register.php" method="post">
            <input class="info-input" name="login" placeholder="Пошта">
            <input class="info-input" name="name" placeholder="Ім'я">
            <input class="info-input" id="password" name="password" placeholder="Пароль">
            <input class="info-input" id="confirmPassword" placeholder="Повторіть пароль">

            <button type="submit" >Зареєструватися</button>
            <form>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

