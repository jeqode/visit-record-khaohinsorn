<?php
class Record{
	private $conn;
	private $table_name = "RECORDS";

	public $record_time;
	public $doc_number;
	public $visit_date;
	public $occupation;
	public $n_people;
	public $address;
	public $district;
	public $province;
	public $meal_price;
	public $meal_quantity;
	public $personal_room;
	public $personal_room_quantity;
	public $group_room;
	public $group_room_quantity;
	public $meeting_room;

	public function __construct($db){
		$this->conn = $db;
	}

	function readAll(){
		try {
			$query = "SELECT record_time, doc_number, visit_date, occupation, n_people, address, district, province, meal_price, meal_quantity, personal_room, personal_room_quantity, group_room, group_room_quantity, meeting_room FROM RECORDS";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			return $stmt;
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	function readOne(){
		try {
		$query = "SELECT record_time, [number], [date], occupation, n_people, address, district, province, meal_price, meal_quantity, personal_room, personal_room_quantity, group_room, group_room_quantity, meeting_room FROM RECORDS WHERE username = {$this->username}";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$this->id = $row['id'];
			$this->username = $row['username'];
			$this->auth_hash = $row['auth_hash'];
			$this->is_admin = $row['is_admin'];
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	function new(){
		try {
			$query = "INSERT INTO {$this->table_name} VALUE(NULL, '{$this->doc_number}', '{$this->visit_date}', '{$this->occupation}', '{$this->n_people}', '{$this->address}', '{$this->district}', '{$this->province}', '{$this->meal_price}', '{$this->meal_quantity}', '{$this->personal_room}', '{$this->personal_room_quantity}', '{$this->group_room}', '{$this->group_room_quantity}', '{$this->meeting_room}')";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			return $stmt;
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
}
?>