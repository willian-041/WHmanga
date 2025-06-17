<?php include('../../includes/header.php');?>

<?php
$volumeDir = "vol1/";
$imagens = glob($volumeDir . "*.jpg");
sort($imagens);
?>

<div class="container mt-5">
    <h2 class="text-center mb-4 text-while">One-Piece - Volume 1</h2>

    <div class="manga-reader">
        <?php
        if (!empty($imagens)) {
            foreach ($imagens as $img) {
                echo "<img src='img alt='Pagina' class='img-fluid mb-3'>";
            }
        }else {
            echo "<p class= 'text-white'>Nenhum página encontrada.</p>";
        }
        ?>
    </div>
</div>