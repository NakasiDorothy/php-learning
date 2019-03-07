<?php 

 namespace App\Core;

 use PDO;

class QueryBuilder{

	protected $pdo;

	public function __construct(PDO $pdo){
		
		$this->pdo = $pdo;
	}



	public function fetchAll($table){

		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);

	}

	public function insert($table, $parameters){
		$sql = sprintf(

			'insert into %s (%s) values(%s)',

			$table,

			implode(',',array_keys($parameters)),

			'\''.implode(',:',array_values($parameters)).'\''
		);

		try{

			$statement = $this->pdo->prepare($sql);

			$statement->execute();
		
		}catch(Exception $e){

			// die('whoops something happened');
			die('whoops something happened'. $e);
		}

	}	

} 