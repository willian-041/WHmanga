<?php
function obterMangas()
{
    return [
        ['titulo' => 'Black Clover', 'capa' => 'img/black_clover', 'link' => 'mangas/black-clover/black-clover.php', 'Volumes' => [['numero' => '1/2/3', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Demon Slayer', 'capa' => 'img/demon_slayer', 'link' => 'mangas/demon-slayer/demon-slayer.php','Volumes' => [['numero' => '1/2/3', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Berserk', 'capa' => 'img/berserk_1', 'link' => 'mangas/berserk/berserk.php', 'Volumes' => [['numero' => '1/2/3', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Fairy Tail', 'capa' => 'img/fairy_tail', 'link' => 'mangas/fairy-tail/fairy-tail.php','Volumes' => [['numero' => '1/2/3', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Soul Eater', 'capa' => 'img/soul_eater1','link' => 'mangas/soul-eater/soul-eater.php', 'Volumes' => [['numero' => '1/2/3', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Blue Exorcist', 'capa' => 'img/blue_exorcist1','link' => 'mangas/blue-exorcist/blue-exorcist.php', 'Volumes' => [['numero' => '1/2/3', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Dragon Ball', 'capa' => 'img/dragon_ball', 'link' => 'mangas/dragon-ball/dragon-ball.php', 'Volumes' => [['numero' => '1/2/3', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Bleach', 'capa' => 'img/bleach_1','link' => 'mangas/bleach/bleach.php', 'Volumes' => [['numero' => '1/2/3', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Hunter x Hunter', 'capa' => 'img/hunter_hunter','link' => 'mangas/hunter-hunter/hunter-hunter.php', 'Volumes' => [['numero' => '1/2/3', 'data' => '2025-06-26T08:00:00']]],

        //caminho link diferente dos demais a cima.
        ['titulo' => 'Hajime No Ippo', 'capa' => 'img/hajime_no_ippo','link' => '/anime_site/mangas/hajime-no-ippo/hajime-no-ippo.php', 'Volumes' => [['numero' => '1/2/3', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Yuyu Hakusho', 'capa' => 'img/yuyu_hakusho', 'link' => '/anime_site/mangas/yuyu-hakusho/yuyu-hakusho.php','Volumes' => [['numero' => '1/2/3', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Attack on Tittan', 'capa' => 'img/attack_on_titan.png', 'link' => '/anime_site/mangas/attack-on-titan/attack-on-titan.php', 'Volumes' => [['numero' => '1/2/3', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Fate', 'capa' => 'img/fate_1', 'link' => '/anime_site/mangas/fate/fate.php', 'Volumes' => [['numero' => '1/2/3', 'data' => '2025-06-26T08:00:00']]],

        // ...
    ];

    $inicio = ($pagina - 1) * $porPagina;

    return array_slice($todosMangas, $inicio, $porPagina);
}
