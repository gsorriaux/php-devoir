<?php require_once 'controllers/lists.php';?>
    <body>
        <?php require_once 'templates/header.php'; ?>
        <main>
            <div class="listing">
                <h1>Liste de livres SF</h1>
                <table>
                    <?php foreach ($lists as $key => $value): ?>
                        <tr>
                            <?php if($key % 2 == 0): ?>
                                <td class="titre"><?= $value['titre']?></td>
                                <td class="description"><?= $value['description']?></td>
                                <td class="img"><img src="<?= $value['image']?>"></td>
                            <?php else: ?>
                                <td class="img"><img src="<?= $value['image']?>"></td>
                                <td class="description"><?= $value['description']?></td>
                                <td class="titre"><?= $value['titre']?></td>
                            <?php endif ?>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </main>
        <?php require_once 'templates/footer.html'; ?>
    </body>
</html>
