<?php
class Database{
	
	function __construct()
	{
		# code...
		
	}
	private $host;
	private $dbusername;
	private $dbpassword;
	private $dbname;

	private function online(){
		$this->host='localhost';
		$this->dbusername='bazarsho_gsroutine';
		$this->dbpassword='5421fd3;.,HbD+';
		$this->dbname='bazarsho_gsroutine';
		try{
			$connection=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->dbusername,$this->dbpassword);
			
		}catch(PDOExection $e){
			echo $e->getMessage();
		}
		return $connection;
	}
	private function offline(){
		$this->host='localhost';
		$this->dbusername='root';
		$this->dbpassword='';
		$this->dbname='gs_routine';
		try{
			$connection=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->dbusername,$this->dbpassword);
			
		}catch(PDOExection $e){
			echo $e->getMessage();
		}
		
		return $connection;
	}
	
	protected function connect(){
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$word="localhost";
		//echo $actual_link;
		if(strpos($actual_link, $word) !== false){
			return $this->offline();

		} else{
			return $this->online();
		}
		
		

	}

	
}

class Model extends Database{
	function __construct(){
		
	}
	function test_db(){
	    $database=new Database();
		
		$stmt=$database->connect();
		
	}
	function sql_execute($sql){
		$database=new Database();
		$stmt=$database->connect()->prepare($sql);
		$stmt->execute();
	}
	function get_tasks(){
		$database=new Database();
		$sql="SELECT * FROM `tasks`";
		$stmt=$database->connect()->prepare($sql);
		$stmt->execute();
		$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
		//echo $sql;
		return $data;
	}
	function get_task_name($id){
		$database=new Database();
		$sql="SELECT * FROM `tasks` where id='$id'";
		$stmt=$database->connect()->prepare($sql);
		$stmt->execute();
		$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
		//echo $sql;
		return $data[0]['task_name'];
	}
	function get_slot_task($h,$d){
		$database=new Database();
		$sql="SELECT * FROM `slot_task` where slot_h='$h' and slot_d='$d'";
		$stmt=$database->connect()->prepare($sql);
		$stmt->execute();
		$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
		//echo $sql;
		if(!empty($data)){
			return $data[0];
		}else{
			return $data;
		}
		

	}
}
?>



