

<?php 

$censura = $_GET['badwords'];

echo str_replace('uccellino','***',$censura);


// $testo="Oggi è un altro post non è un bel sito";
// echo str_replace("non è","è",$testo);

?>

<p>
    Il povero <?php echo $censura; ?> non sapeva più a chi rivolgersi, ma continuò a saltellare… Lo vide un abete e gli chiese
</p>