

<div id="login">
    <h1>Connectez vous</h1>
    <form action="/forms/login-form.php" method="post">
        <div>
            <label for="id-username">Username</label>
            <input type="text" name="username" id="id-username">
        </div>
        <div>
            <label for="id-password">Password</label>
            <input type="password" name="password" id="id-password">
        </div>
        <div>
            <input type="submit" value="Envoyer" name="submit-login">
        </div>
    </form>
</div>

<div id="register">
    <form action="/forms/register-form.php" method="post">
        <div>
            <label for="id-username">Username</label>
            <input type="text" name="username" id="id-username">
        </div>
        <div>
            <label for="id-age">Age</label>
            <input type="number" name="age" id="id-age">
        </div>
        <div>
            <label for="id-password">Password</label>
            <input type="password" name="password" id="id-password">
        </div>
        <div>
            <label for="id-password-repeat">Répétez le mot de passe</label>
            <input type="password" name="password-repeat" id="id-password-repeat">
        </div>
        <div>
            <input type="submit" value="Envoyer" name="submit">
        </div>
    </form>
</div>

<div>
    <span>Pas de compte? Créez en un <strong>gratuitement</strong> !</span>
</div>
