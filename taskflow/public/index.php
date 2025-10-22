<?php
define('SITE_NAME', 'xoxo');
$pageTitle = SITE_NAME . ' - xoxo';
$userName = 'Pepe';
$userAge = '21';
$isPremiunUser = true;
$tasks = array ("title", "completed", "priority", "", "");
?>
<?php include "app/views/public/header.php"; ?>
<h2>Perfil de usuario</h2>
			<p><strong>Nombre:</strong> <?php echo $userName; ?></p>
			<p><strong>Edad:</strong> <?php echo $userAge; ?></p>
			<p><strong>Estado de la cuenta:</strong>Usuario<?php echo $isPremiunUser ? ' Premium' : ' Estándar'; ?></p>
<?php include "app/views/public/footer.php"; ?>



