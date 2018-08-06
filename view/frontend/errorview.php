<?php $title = 'Erreur - Poissonnerie du Port Chez Elise'; ?>
<?php $title = 'Bienvenue à la Poissonnerie du Port Chez Elise' ?>
<?php $description = 'Bienvenue à la poissonnerie du port Chez Élise. Élise vous accueille dans sa poissonnerie située à Lanton sur le port de Cassy, au cœur du bassin d\'Arcachon' ?>
<?php $keywords = 'Poissonnerie du Port Chez Elise' ?>
<?php $pageTitle = 'Page d\'erreur </br>' . $errorMessage?>

<?php require('view/frontend/templates/headerSecondary.php'); ?>
<?php ob_start(); ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/templateError.php'); ?>