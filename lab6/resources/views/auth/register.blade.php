<div id="signUp-modal" class="auth-modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Вітаємо!</p>
        <form method="post" action="{{ route('register.perform') }}" id="form">
            @csrf
            <input class="info-input" name="email" value="{{ old('email') }}"
                   placeholder="Пошта" required>
            <input class="info-input" name="username" value="{{ old('username') }}"
                   placeholder="Ім'я" required>
            <input class="info-input" id="password" name="password" value="{{ old('password') }}"
                   placeholder="Пароль" required>
            <input class="info-input" id="confirmPassword" name="password_confirmation" value="{{ old('password') }}"
                   placeholder="Повторіть пароль">

            <button type="submit" >Зареєструватися</button>
        </form>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
