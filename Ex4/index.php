<?php
$page = "Exercice 4"; // Définir la variable pour changer le titre !
$months = array('janvier' , 'février' , 'mars' , 'avril' , 'mai' , 'juin' , 'juillet' , 'aout' , 'septembre' , 'octobre' , 'novembre' , 'décembre');
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 4</h2>
 <h3 class="text-center pb-5">Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</h3>
<p><?= $months[7] = 'août' ?></p>
<?php
include '../footer.php';
?>
