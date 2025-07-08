<?php include('../../includes/header.php'); ?>

<?php
$volumeDir = "vol1/";
$imagens = glob($volumeDir . "*.jpg");
sort($imagens);
?>

<div class="container mt-5">
    <h2 class="text-center mb-4 text-white">One Piece - Volume 1</h2>

    <div class="manga-reader">
        <?php
        if (!empty($imagens)) {
            foreach ($imagens as $img) {
                echo "<img src='$img' alt='Página' class='img-fluid mb-3 w-100'>";
            }
        } else {
            echo "<p class='text-white'>Nenhuma página encontrada.</p>";
        }
        ?>
    </div>
</div>

<?php include('../../includes/footer.php'); ?>


