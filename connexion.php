    <body>
        <?php require_once 'templates/header.php'; ?>
        <main>
            <div class="connexion">
                <form action="controllers/login.php" method="post">
                    <label for="login">Votre nom :</label>
                    <input type="text" name="login" value="">
                    <label for="password">Votre mot de passe :</label>
                    <input type="password" name="password" value="">
                    <input type="submit">
                </form>
            </div>
        </main>
        <?php require_once 'templates/footer.html'; ?>
    </body>
</html>
