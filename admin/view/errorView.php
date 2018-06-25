<?php $title = 'Erreur - Poissonnerie du Port Chez Elise'; ?>

<?php ob_start(); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?= $errorMessage ?></h3>
                <p><a href="index.php">Retour la page Admin</a></p>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('templates/templateAdmin.php'); ?>