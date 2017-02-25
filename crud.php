<?php
/**
*  AUTHOR : Raqael Fisabillah
*/
class Crud
{
	private $db;
	function __construct()
	{
		$this->db= new mysqli('DB-HOST','DB-USER','DB-PASSWORD','DB-NAME'); //Host ,user ,password ,dbname 
	}
	function create($table,$data){
		$count = 0;
		$field = '';
		foreach ($data as $key => $value)
		{
			if ($count++ != 0) $field .= ', ';
			$key 	= mysql_real_escape_string($key);
			$value 	= mysql_real_escape_string($value);
			$field .= "$key = '$value'";
		}
		$query = $this->db->prepare("INSERT INTO {$table} SET {$field}");
		return $query->execute();
	}
	function read($table,$where){
		$sql = "SELECT * FROM {$table} {$where}";
		$query = $this->db->query($sql);
		return $query->fetch_all(MYSQLI_BOTH);
	}
	function update($table,$data,$col,$isi){
		$count = 0;
		$field = '';
		foreach ($data as $key => $value)
		{
			if ($count++ != 0) $field .= ', ';
			$key 	= mysql_real_escape_string($key);
			$value 	= mysql_real_escape_string($value);
			$field .= "$key = '$value'";
		}
		$query = $this->db->prepare("UPDATE `$table` SET $field WHERE $col = '$isi'");
		return $query->execute();
	}
	function delete($table,$where){
		$query	= $this->db->prepare("DELETE FROM {$table} {$where}");
		return $query->execute();
	}
}
?>