<?php
include("./global.php");
date_default_timezone_set('Europe/Paris');


		if(isset($_POST['textdedi']) || isset($_POST['pseudodedi'])) {
			mysql_query("INSERT INTO dedicasse (`text`,`pseudo`) VALUES ('".Securise($_POST['textdedi'])."','".Securise($_POST['pseudodedi'])."')") or die(mysql_error());
			echo"ok";
		} else  {
			echo "erreur";
		}							

			
			?>