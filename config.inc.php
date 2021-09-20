<?php

	define( "DIR_RAIZ", $_SERVER['DOCUMENT_ROOT'] );
	define( "DIR_INC", DIR_RAIZ . "/esp8266/includes/" );
	
	define( "HOST", "http://" . $_SERVER['HTTP_HOST'] );
	define( "DIR_IMG", HOST . "/images/" );

	define( "MYSQL_HOST", "localhost" );
	define( "MYSQL_USER", "carlos" );
	define( "MYSQL_PASSWD", "orozco" );
	define( "MYSQL_DBNAME", "sensores1" );
	
	/*echo $_SERVER['DOCUMENT_ROOT']."<br>";*/
	//echo DIR_RAIZ."<br>";
	//echo HOST."<br>";
	//echo DIR_INC."<br>";
	//echo DIR_IMG."<br>";
	 //echo MYSQL_HOST;

?>
