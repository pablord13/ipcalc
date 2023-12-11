<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>CALCULADORA IP</title>
</head>
	<body>
		<p><u>RESULTAT DEL CÀLCUL DE SUBXARXA</u></p>		
		<?php
			// Preparant l'accés al framework per fer càlculs d'adreces IP
			require_once(__DIR__ . '/vendor/autoload.php');
			//Obtenció del primer operand
			if ($_GET["op1"] =="") {
				$operand1 = 0;
			}
			else{
				$operand1 = $_GET["op1"];
			}
			#
			#Obtenció del segon operand
			if ($_GET["op2"] =="") {
				$operand2 = 0;
			}
			else{
				$operand2 = $_GET["op2"];
			}
			#
			#Obtencio del resultat i mostrant el resultat
			$sub = new IPv4\SubnetCalculator($_GET["op1"], $_GET["op2"]);
			$network= $sub->getNetworkPortion();
			$broadcastAddress = $sub->getBroadcastAddress();
			$addressableHostRange = $sub->getAddressableHostRange();
			$numberHosts = $sub->getNumberAddressableHosts(); 
			echo "<p>Adreça IP de l'equip: ".$_GET["op1"]."/".$_GET["op2"]."</p>";
			echo "<p>Adreça IP de subxarxa: $network/".$_GET["op2"]."</p>";
			echo "<p>Adreça IP de broadcast: $broadcastAddress</p>";
			echo "<p>Marge d'adreces de host: Des de $addressableHostRange[0] a $addressableHostRange[1]</p>";
			echo "<p>Quantitat equips dins de la subxarxa: $numberHosts</p>";						
		?>	
		<a href="index.php">Torna a l'inici</a>	
	</body>
</html>
