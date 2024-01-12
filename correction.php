

<?php 
$paragrafo = $_GET['paragrafo'];
$censura = $_GET['badwords'];
$nuovoParagrafo = str_replace($paragrafo,$censura,'***');

?>

<p>
    Il povero <?php echo $nuovoParagrafo; ?> non sapeva più a chi rivolgersi, ma continuò a saltellare… Lo vide un abete e gli chiese
</p>