<div id="signIn-modal" class="auth-modal">

    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Вітаємо знову!</p>
        <form action="/EcoWorldWithPHP/lab6/public/login" method="POST">
            @csrf
            <input class="info-input" name="login" id="email" placeholder="Пошта">
            <input class="info-input" name="password" id="password" placeholder="Пароль">
            <button type="submit">Вхід</button>
        </form>
    </div>
</div>
