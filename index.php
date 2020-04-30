    <body>
        <?php require_once 'templates/header.php'; ?>
        <main>
            <div class="accueil">
                <h1>Bienvenue <?php if(!empty($_SESSION)): ?> <?= ucfirst($_SESSION['name']) ?> <?php endif ?> sur Mes Livres SF</h1>
                <p>Vous pourrez retrouver sur notre site un petit de choix de livre de SF culte et à connaître absolument</p>
                <p>Bonne visite !</p>
            </div>
        </main>
        <?php require_once 'templates/footer.html'; ?>
    </body>
</html>
