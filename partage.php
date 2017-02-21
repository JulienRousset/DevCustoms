		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
				<meta charset="utf-8">
<?php

	include('./global.php');

	$categorie = Securise($_GET['categorie']);
	$sql = mysql_query("SELECT * FROM contenue WHERE categorie = '".$categorie."'");
	while($contenue = mysql_fetch_array($sql)) { 

?>
<script>
		function contenue<?php echo $contenue['id']; ?>(){
			$('#popupbox<?php echo $contenue['id']; ?>').fadeIn(0);
			}
			
		function close<?php echo $contenue['id']; ?>(){
			$('#popupbox<?php echo $contenue['id']; ?>').fadeOut(0);
			}
</script>
<div id="popupbox<?php echo $contenue['id']; ?>" style="display:none;">
<div id="popupbox">
	<div class="box">
		<div class="title"><?php echo utf8_encode($contenue['title']); ?> <a onclick="close<?php echo $contenue['id']; ?>()"><span>X</span></div></a>
		<span><?php echo utf8_encode($contenue['contenue']); ?></span>
		<a href="<?php echo $contenue['lien']; ?>"><div id="bouton">Download</div></a>
	</div>
</div>
</div>
	<?PHP } ?>
<?php 
	include('./template/header.php');
		$categorie = Securise($_GET['categorie']);
	$sql = mysql_query("SELECT * FROM contenue WHERE categorie = '".$categorie."'");
	while($contenue = mysql_fetch_array($sql)) { 

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script>
</script>
<div id="structure">
		<div id="contenue4">
			<div class="box1">
				<div class="title"><?php echo utf8_encode($contenue['title']); ?></div>
				<span><?php echo utf8_encode($contenue['description']); ?></span>
				<img src="<?php echo $contenue['image']; ?>" href="<?php echo $contenue['image']; ?>" alt="image cms" />
				<a onclick="contenue<?php echo $contenue['id']; ?>()"><div id="bouton">Voir</div></a>
			</div>
		</div>
</div>

<footer>
	<div id="structure">
		<span style="float:left">Layout by Fix0r<br>Jordan edit</span>
		<span style="float:right">http://http://devcustoms.fr/</span>
	</div>
</FOOTER>

</body>
</html>
	<?php } ?>