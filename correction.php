

<?php 
$paragrafo = $_GET['paragrafo'];
$censura = $_GET['badwords'];

?>

<p>
    Il povero <?php echo str_replace($paragrafo,$censura,'***'); ?> non sapeva più a chi rivolgersi, ma continuò a saltellare… Lo vide un abete e gli chiese
</p>