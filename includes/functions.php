<?php
function obterMangas()
{
    return [
        ['titulo' => 'Black Clover', 'capa' => 'img/black_clover', 'link' => 'mangas/black_clover/black-clover.php', 'capitulos' => [['numero' => '1', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Damon Slayer', 'capa' => 'img/damon_slayer', 'link' => 'mangas/damon_slayer/damon-slayer.php','capitulos' => [['numero' => '1', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Berserk', 'capa' => 'img/berserk_1', 'link' => 'mangas/berserk_1/berserk.php', 'capitulos' => [['numero' => '18.5', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Fairy Tail', 'capa' => 'img/fairy_tail', 'link' => 'mangas/failry_tail/fairy-tail.php','capitulos' => [['numero' => '18.5', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Soul Eater', 'capa' => 'img/soul_eater1','link' => 'mangas/soul_eater1/soul-eater.php', 'capitulos' => [['numero' => '18.5', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Blue Exorcist', 'capa' => 'img/blue_exorcist1','link' => 'mangas/blue_exorcist/blue-exorcist.php', 'capitulos' => [['numero' => '18.5', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Dragon Ball', 'capa' => 'img/dragon_ball', 'link' => 'mangas/dragon-ball/dragon-ball.php', 'capitulos' => [['numero' => '18.5', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Bleach', 'capa' => 'img/bleach_1','link' => 'mangas/bleach_1/bleach.php', 'capitulos' => [['numero' => '18.5', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Hunter x Hunter', 'capa' => 'img/hunter_hunter','link' => 'mangas/hunter_hunter/hunter-hunter.php', 'capitulos' => [['numero' => '18.5', 'data' => '2025-06-26T08:00:00']]],

        
        ['titulo' => 'Hajime No Ippo', 'capa' => 'img/hajime_no_ippo','link' => 'mangas/hajime_no_ippo/hajime-no-ippo.php', 'capitulos' => [['numero' => '18.5', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Yuyu Hakusho', 'capa' => 'img/yuyu_hakusho', 'link' => 'mangas/yuyu_hakusho/yuyu-hakusho.php','capitulos' => [['numero' => '18.5', 'data' => '2025-06-26T08:00:00']]],

        ['titulo' => 'Attack on Tittan', 'capa' => 'img/attack_on_titan.png', 'link' => 'mangas/attack_on_titan/attack-on-titan.php', 'capitulos' => [['numero' => '18.5', 'data' => '2025-06-26T08:00:00']]],

        // ...
    ];

    $inicio = ($pagina - 1) * $porPagina;

    return array_slice($todosMangas, $inicio, $porPagina);
}
