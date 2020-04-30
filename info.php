<body>
    <?php require_once 'templates/header.php'; ?>
    <main>
        <div class="info">
            <h1>La Planète des singes</h1>
            <img src="/images/apes.jpg" alt="planet of apes">
            <p>Le roman raconte l’histoire de trois hommes qui explorent une planète lointaine similaire à la Terre, où les grands singes sont les espèces dominantes et intelligentes, alors que l'humanité est réduite à l’état animal. Le narrateur, Ulysse Mérou, est capturé par les singes et se retrouve enfermé dans un laboratoire. Prouvant son intelligence aux singes, il aide ensuite les scientifiques simiens à découvrir les origines de leur civilisation.</br>Satire de l'humanité, de la science et de la guerre, l'ouvrage aborde également les thèmes de l'instinct, de l'évolutionnisme et de la société humaine. La Planète des singes est l'un des romans les plus célèbres de Pierre Boulle et fait l’objet de plusieurs adaptations cinématographiques internationales. L'auteur est même contacté par les producteurs pour rédiger le scénario d'un des films.</p>
            <table>
                <tr>
                    <td>Genre</td>
                    <?php if($_SESSION['genre'] == "yes"):  ?>
                        <td>Science-fiction</td>
                    <?php endif ?>
                </tr>
                <tr>
                    <td>Année de parution</td>
                    <?php if($_SESSION['annee'] == "yes"):  ?>
                        <td>1963</td>
                    <?php endif ?>
                </tr>
                <tr>
                    <td>Cible</td>
                    <?php if($_SESSION['cible'] == "yes"):  ?>
                        <td>Tout public</td>
                    <?php endif ?>
                </tr>
            </table>
        </div>
    </main>
    <?php require_once 'templates/footer.html'; ?>
</body>
</html>
