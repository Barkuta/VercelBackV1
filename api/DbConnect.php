<?php 
	
	class DbConnect {
		private $server = 'bbdkll16pnuyvtej1fxs-mysql.services.clever-cloud.com';
		private $dbname = 'bbdkll16pnuyvtej1fxs';
		private $user = 'ugdhcb4vcua7empy';
		private $pass = '0PY4n8LAK2KV6DjPcqFj';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' .$this->server .';dbname=' . $this->dbname, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch (\Exception $e) {
				echo "Database Error: " . $e->getMessage();
			}
		}
	}
 ?>


