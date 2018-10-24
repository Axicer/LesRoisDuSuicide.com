<?php
	require File::build_path(array("model", "config", "Conf.php"));

	abstract class Model{

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

		public static function create($data){
			$table = static::$TABLE_NAME;
			$pk = static::$PRIMARY;
			$att = static::$ATTRIBUTES;

			try{
				//INSERT INTO nomTable(att1, att2, att3...) VALUES (:att1, :att2, :att3...);
				//table data
				$sql = "INSERT INTO $table(";
				for($i = 0 ; i < count($att) ; i++) {
					$sql = $sql.$att[$i].", ";
				}
				for($i = 0 ; i < count($pk) ; i++) {
					$sql = $sql.$pk[$i];
					if($i < count($att)-1){
						$sql = $sql.", ";
					}
				}
				$sql = $sql.") VALUES (";
				//variables
				for($i = 0 ; i < count($att) ; i++) {
					$sql = $sql.":".$att[$i].", ";
				}
				for($i = 0 ; i < count($pk) ; i++) {
					$sql = $sql.":".$pk[$i];
					if($i < count($att)-1){
						$sql = $sql.", ";
					}
				}
				$sql = $sql.");";
				
				$req_prep = Model::$pdo->prepare($sql);
	            $req_prep->execute($data);
			}catch(Exception e){
				if (Conf::isDebug()) {
                  echo $e->getMessage();
                } else {
                  echo "Une erreur est survenue dans l'insertion d'un attribut dans une table =)";
                }
			}
		}

		
	}
?>