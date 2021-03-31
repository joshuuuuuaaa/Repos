<?php
echo "jzeh";
$con=mysql_connect("127.0.0.1","root",""); 

mysql_select_db("mabase",$con); 


$resut= mysql_query("SELECT NumAvion,Type,Nom FROM avion"); 

	while ($ligne = mysql_fetch_row($resultat)) {  
		echo "NumAvion : $ligne[0]<br>"; 
		echo "Type : $ligne[1]<br>";  
		echo "Nom : $ligne[2]<br>"; 
	}

	mysql_close($con); 
?>