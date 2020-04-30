<body>
    <?php require_once 'templates/header.php'; ?>
    <main>
        <?php if(!empty($_SESSION['name'])): ?>
            <div class="profil">
                <h1>Bienvenue <?= $_SESSION['name']?> sur votre page Profil.</h1>
                <div class="infoProfil">
                    <div class="nameProfil">
                        <img src="/images/profil.jpg" alt="ma photo">
                        <div class="name">
                            <p>Numéro 5</p>
                            <p>Johnny</p>
                        </div>
                    </div>
                    <div class="status">
                        <p>Status :</p>
                        <p>Célibataire</p>
                    </div>
                    <div class="descriptionProfil">
                        <p>Le Prototype S-A-I-N-T Numéro 5 H-429 a été conçu par le Professeur Newton Crosby et son partenaire Benjamin « Jabutiya » Jahrvi (prononcer Jahvèri), puis construit par la division « Robotics » de NOVA Laboratories Incorporated, filiale à Astoria (en Oregon) d’une firme New Yorkaise travaillant pour les forces armées des États-Unis. Quatre autres prototypes ont été construits dans le même temps. Le tout aurait été destiné au Département de la Défense des États-Unis dans le contexte de la Guerre Froide. Ce soldat robotisé étant prévu pour transporter une arme nucléaire, NOVA l’a présenté à l’armée sous le nom de S-A-I-N-T : Système Artificiel-Intelligent Nucléaire de Transport1. Cet acronyme est prononcé « Saint » dans le film, ce qui évoque l’idée d’invincibilité des robots, élevés par leurs créateurs à l’état de « semi-dieux ».</p>
                    </div>
                </div>
                <form action="/controllers/preferences.php" method="post">
                    <div class="formLine">
                        <label for="genre">Afficher le genre :</label>
                        <label for="genre">Oui</label>
                        <input type="radio" name="genre" value="yes" checked>
                        <label for="genre">Non</label>
                        <input type="radio" name="genre" value="no">
                    </div>
                    <div class="formLine">
                        <label for="annee">Afficher l'année de parution :</label>
                        <label for="annee">Oui</label>
                        <input type="radio" name="annee" value="yes" checked>
                        <label for="annee">Non</label>
                        <input type="radio" name="annee" value="no">
                    </div>
                    <div class="formLine">
                        <label for="age">Afficher la cible :</label>
                        <label for="cible">Oui</label>
                        <input type="radio" name="cible" value="yes" checked>
                        <label for="cible">Non</label>
                        <input type="radio" name="cible" value="no">
                    </div>                                
                    <input type="submit"value="Sauvegarder">
                </form>
            </div>
        <?php else : ?>
            <div class="needConnection">
                <p>Vous devez être connecté pour voir cette page</p>
            </div>
        <?php endif ?>
    </main>
    <?php require_once 'templates/footer.html'; ?>
</body>
</html>
