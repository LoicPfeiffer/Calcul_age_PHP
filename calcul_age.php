<?php  
    $action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);

    $saisie = $_GET['saisie'] ?? '-1';
    $age = intval($saisie);
    $annee = date('Y');
    $ageValide = $age >= 1 && $age <= 130;
    echo('$ageValide='); var_dump($ageValide); echo '<br>';
?>
    <form method="GET" action="<?= $action ?>">
        <label for="saisie">Votre âge au 31/12/<?= $annee ?> </label>
        <input type="text" name="saisie" value="<?= $saisie ?? '' ?>"/>
        <input type="submit" value="envoyer">
    </form>


<?php
    $naiss = $annee - $age;
    echo 'Vous êtes né en ' . $naiss;
?>