<?php
$lists = [
    [
        "titre" => "La Machine à explorer le temps de H.G. Wells",
        "description" => "La Machine à explorer le temps est un grand classique écrit en 1895. On considère que c’est un livre référence sur le voyage dans le temps. En effet, le lecteur y écoute le narrateur, premier voyageur officiel dans le temps, qui raconte à ses amis toutes les époques dans lesquelles il s’est rendu. Il commence d’ailleurs son histoire en parlant de l’an l’an 802 701.",
        "image" => "/images/machine.jpg"
    ],
    [
        "titre" => "La Guerre des mondes de H.G. Wells",
        "description" => "La Guerre des mondes fait très certainement partie des meilleurs livres de science-fiction. Publié en 1898, c’est un roman précurseur dans l’univers de la SF. Il dépeint un monde dévasté par les tripodes, des extraterrestres venus anéantir toute trace de vie sur Terre. En 1938, les Américains ont été saisis de panique en entendant la lecture du livre à la radio !",
        "image" => "/images/guerre.jpg"
    ],
    [
        "titre" => "Le Meilleur des mondes d’Aldous Huxley",
        "description" => "Au panthéon des meilleurs livres de science-fiction, on peut aussi citer Le Meilleur des mondes d’Aldous Huxley. En effet, ce roman d’anticipation écrit en 1931 est un chef-d’oeuvre glaçant. Il dépeint un monde dystopique où les êtres humains se répartissent par castes. Leur niveau d’intelligence, leur physique et leur future profession sont décidées avant même leur naissance en laboratoire.",
        "image" => "/images/meilleur.jpg"
    ],
    [
        "titre" => "Ravage de René Barjavel",
        "description" => "Ravage est un roman post-apocalyptique paru en 1943. Il plonge le lecteur dans un véritable cauchemar, né des doutes de René Barjavel sur le bien-fondé de la technologie. Un jour, à la suite d’une catastrophe, les êtres humains se retrouvent privés d’électricité. Sans moyens de transports, sans lumière et sans machine, l’humanité s’effondre rapidement.",
        "image" => "/images/ravage.jpg"
    ],
    [
        "titre" => "1984 de George Orwell",
        "description" => "Probablement un des meilleurs livres de science-fiction ayant existé. Le plus célèbre roman de George Orwell, écrit en 1949, dépeint une réalité effrayante qui rappelle à la fois le stalinisme et le nazisme. Dans une Grande-Bretagne dystopique, Big Brother contrôle toute la vie des être humains, allant même jusqu’à leur dicter leurs pensées et leurs émotions. Ce roman adapté en film a un très fort impact sur ses lecteurs. Il dénonce le totalitarisme,  mais également la réduction des libertés due à la publicité et aux nouvelles technologies.",
        "image" => "/images/1984.jpg"
    ]
]
 ?>

    <body>
        <?php require_once 'templates/header.php'; ?>
        <main>
            <table>
                <?php foreach ($lists as $value): ?>
                    <tr>
                        <td class="titre"><?= $value['titre']?></td>
                        <td class="description"><?= $value['description']?></td>
                        <td class="img"><img src="<?= $value['image']?>"></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </main>
        <?php require_once 'templates/footer.html'; ?>
    </body>
</html>
