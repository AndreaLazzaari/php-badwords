

<?php 
$paragrafo = $_GET['paragrafo'];
$censura = $_GET['badwords'];
$nuovoParagrafo = str_replace($censura,'***',$paragrafo);

?>

<?php echo $nuovoParagrafo; ?>
