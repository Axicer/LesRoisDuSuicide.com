<?php
	require_once File::build_path(array("model", "config", "Conf.php"));

	static class Model{

		static private $pdo = NULL;

        public function __construct(){
            if(is_null($pdo)){
	            try{
	                $hostname = Conf::getHostname();
	                $database_name = Conf::getDatabase();
	                $login = Conf::getLogin();
	                $password = Conf::getPassword();
	                self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            }catch(PDOException $e){
	                if (Conf::isDebug()) {
	                  echo $e->getMessage(); // affiche un message d'erreur
	                } else {
	                  echo 'Une erreur est survenue !';
	                }
	                die();
	            }
            }
        }
	}
?>