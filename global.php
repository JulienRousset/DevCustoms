<?php

		@session_start();
		$MySQL_HOST = "mysql02.cloudfordream.com";
		$MySQL_PORT = "3306";
		$MySQL_USER = "user_0061";
		$MySQL_PASSWORD = "2z9NyUR8ESh9dTvB83";
		$MySQL_DATABASE = "user_0061";
			try{
			$bdd = new PDO('mysql:host='.$MySQL_HOST.';port='.$MySQL_PORT.';dbname='.$MySQL_DATABASE, $MySQL_USER, $MySQL_PASSWORD);
			}
			catch (Exception $e){
			die('Erreur : ' . $e->getMessage());
			}
			
		$maintenance = "0";
		
		if($maintenance == 1)
		{
			// Redirect("MONURL/maintenance.php");
		} 

		function Securise($str)
		{
				$str = mysql_real_escape_string(htmlspecialchars(stripslashes(nl2br(trim($str)))));
				return $str;
		}
?>