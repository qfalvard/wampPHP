<?php
require __DIR__ . '/bootstrap.php';

$ships = ShipLoader::getShips();

// On vérifie que les données du formulaire existent :
$ship1Name      = isset($_POST['ship1_name']) ? $_POST['ship1_name'] : null;
$ship1Quantity  = isset($_POST['ship1_quantity']) ? $_POST['ship1_quantity'] : 1;
$ship2Name      = isset($_POST['ship2_name']) ? $_POST['ship2_name'] : null;
$ship2Quantity  = isset($_POST['ship2_quantity']) ? $_POST['ship2_quantity'] : 1;

// On redirige avec une erreur en session s'il y a une erreur.
if (!$ship1Name || !$ship2Name) {
    $_SESSION['error'] = 'missing_data';
    header('Location: index.php');
    die;
}

if (!isset($ships[$ship1Name]) || !isset($ships[$ship2Name])) {
    $_SESSION['error'] = 'bad_ships';
    header('Location: index.php');
    die;
}

if ($ship1Quantity <= 0 || $ship2Quantity <= 0) {
    $_SESSION['error'] = 'bad_quantities';
    header('Location: index.php');
    die;
}

// On récupère dans le tableau $ships (liste des Ships) notre vaisseau,
// en passant en clé du tableau $ship1Name et $ship2Name qui sont les valeurs
// venant de POST (déclarées en début du fichier)
$ship1 = $ships[$ship1Name];
$ship2 = $ships[$ship2Name];

$battleManager = new BattleManager();
// On passe toutes nos données dans la fonction battle(), et on met le resultat dans $outcome ( = "résultat")
$outcome = $battleManager->battle($ship1, $ship1Quantity, $ship2, $ship2Quantity);
?>

<?php include('_partials/_header.php'); ?>
<h1><i class="fa fa-rocket" aria-hidden="true"></i> HB Battleships</h1>
<hr>

<div class="card mb-2">
    <div class="card-body text-center">
        <h2>Le combat :</h2>
        <p>
            <!-- On affiche la quantité de vaisseaux (au pluriel si la quantité est supérieure à 1) -->
            <?php echo $ship1Quantity; ?> <?php echo $ship1->getName('name'); ?><?php echo $ship1Quantity > 1 ? 's' : ''; ?>
            <strong>VERSUS</strong>
            <?php echo $ship2Quantity; ?> <?php echo $ship2->getName('name'); ?><?php echo $ship2Quantity > 1 ? 's' : ''; ?>
        </p>
    </div>
</div>
<div class="card">
    <div class="card-body text-center">
        <h3 class="text-center audiowide">
            Gagnant :
            <?php if ($outcome->isThereAWinner()) : ?>
                <?php echo $outcome->getWinningShip()->getName(); ?>
            <?php else : ?>
                Personne
            <?php endif; ?>
        </h3>
        <p class="text-center">
            <?php if (!$outcome->isThereAWinner()) : ?>
                Les deux opposants se sont détruits lors de leur bataille épique.
            <?php else : ?>
                Le groupe de <?php echo $outcome->getWinningShip()->getName(); ?>
                <?php if ($outcome->wereBoosterUsed()) : ?>
                    a utilisé son booster Spatiodrive pour détruire l'adversaire !
                <?php else : ?>
                    a été plus puissant et a détruit le groupe de <?php echo $outcome->getLosingShip()->getName() ?>s
                <?php endif; ?>
            <?php endif; ?>
            <p>La résistance de Ship1 est <?= $ship1->getName();?> : <?= $ship1->getStrength();?></p>
            <p>La résistance de Ship2 est <?= $ship2->getName();?> : <?= $ship2->getStrength();?></p>
        </p>
    </div>

    <a href="index.php">
        <p class="text-center"><i class="fa fa-undo"></i> Recommencer un combat</p>
    </a>

    <?php include('_partials/_footer.php'); ?>