

<?php 
$paragrafo = $_GET['paragrafo'];
$censura = $_GET['badwords'];
$nuovaParola = echo str_replace($paragrafo,$censura,'***');
?>

<p>
    Il povero <?php $nuovaParola; ?> non sapeva più a chi rivolgersi, ma continuò a saltellare… Lo vide un abete e gli chiese
</p>