<?php
session_start();

if(!isset($_GET[pagina])) $_GET[pagina] = "inicio"; //Página por default

define(HOSTNAME,"localhost");
define(DATABASE,"bsdiving_site");
define(USERNAME,"bsdiving_standar");
define(PASS,"jUvaP#?2e2Ac");

include ((substr_count($_SERVER[PHP_SELF],'admin') > 0) ? '../' : '').'includes/dbFacile.php';
function db()
{
	$db = dbFacile::open("mysql", DATABASE, USERNAME, PASS, HOSTNAME);
	$db->execute("SET NAMES utf8");
	$db->execute("SET lc_time_names = 'es_MX';");
	return $db;
}
?>