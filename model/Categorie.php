<?php
	class Categorie extends Model{
		

		protected static $ATTRIBUTES = array('nomCategorie',);

		protected static $PRIMARY_KEY = 'idCategorie';
		
		protected static $TABLE_NAME = 'Categories';


		public 


		public function get($att){
			return $this->$att;
		}

		public function set($att,$val){
			$this->$att = $val;
		}


	}



?>