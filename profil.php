<body>
    <?php require_once 'templates/header.php'; ?>
    <main>
        <?php if(!empty($_SESSION['name'])): ?>
            <div class="profil">
                <h1>Bienvenue <?= $_SESSION['name']?> sur votre page Profil.</h1>
                <table>
                    <tr>
                        <td><img src="/images/profil.jpg" alt="ma photo"></td>
                        <td>Numéro 5</td>
                        <td>Johnny</td>
                    </tr>
                    <tr>
                        <td>Status :</td>
                        <td>Célibataire</td>
                    </tr>
                    <tr>
                        <td>Le Prototype S-A-I-N-T Numéro 5 H-429 a été conçu par le Professeur Newton Crosby et son partenaire Benjamin « Jabutiya » Jahrvi (prononcer Jahvèri), puis construit par la division « Robotics » de NOVA Laboratories Incorporated, filiale à Astoria (en Oregon) d’une firme New Yorkaise travaillant pour les forces armées des États-Unis. Quatre autres prototypes ont été construits dans le même temps. Le tout aurait été destiné au Département de la Défense des États-Unis dans le contexte de la Guerre Froide. Ce soldat robotisé étant prévu pour transporter une arme nucléaire, NOVA l’a présenté à l’armée sous le nom de S-A-I-N-T : Système Artificiel-Intelligent Nucléaire de Transport1. Cet acronyme est prononcé « Saint » dans le film, ce qui évoque l’idée d’invincibilité des robots, élevés par leurs créateurs à l’état de « semi-dieux ».</td>
                    </tr>
                </table>
                <form action="/controllers/preferences.php" method="post">
                    <label for="genre">Afficher le genre :</label>
                    <input type="radio" name="genre" value="yes" checked>
                    <input type="radio" name="genre" value="no">
                    <label for="annee">Afficher l'année de parution :</label>
                    <input type="radio" name="annee" value="yes" checked>
                    <input type="radio" name="annee" value="no">
                    <label for="age">Afficher la cible :</label>
                    <input type="radio" name="cible" value="yes" checked>
                    <input type="radio" name="cible" value="no">
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
