<?php
session_start();
class config{

private $servername;
private $username;
private $dbname;
private $password;

 protected function connect() {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'CedHosting';

        return new mysqli($this->servername, $this->username, $this->password, $this->dbname );
    }
} 
class Query extends config{
	
	
	public function fetchRecord( $table, $fields='', $conditions='', $order_by_field='', $order_by_type='', $date='') {
	
		$sql = "SELECT * FROM `$table`";
	
		if($fields != '') { 
			$fields = "`".implode( '`,`', $fields )."`";
			$sql = "SELECT $fields FROM `$table`";
		}
		
		if($conditions != '') { 
			$sql .= " WHERE ";
			$c = count( $conditions );
			$i = 1;
			foreach( $conditions as $key=>$value ) {
				if ( $c == $i ) {
					$sql .= " `$key` = '$value'";
				} else {
					$sql .= " `$key` = '$value' AND";
				}
				$i++;
			}
		}

		if ( $date != '' ) {
			if ( $conditions != '' ) {
				$sql .= " AND `$date[0]`>'$date[1]'";
			} else {
				$sql .= " WHERE `$date[0]`>'$date[1]'";
			}
		}
		
	
		if ( $order_by_field != '' ) {
			$sql .= " ORDER BY `$order_by_field` $order_by_type";
		}
		
		$result = $this->connect()->query( $sql );
		if ( $result -> num_rows > 0 ) {
			$arr = array();
			
			while( $row = $result->fetch_assoc() ) {
				$arr[] = $row;
			}
		
			return $arr;
		} 
		return 0;
	}

	public function insertRecord( $table, $arr='' ) {

		if ( $arr != '' ) {

			$fields = array();
			$values = array();

			foreach( $arr as $key=>$value ) {
				$fields[] = $key;				
				$values[] = $value;
			}

			$fields = "`".implode( '`,`',$fields )."`";
			$values = "'".implode( "','",$values )."'";
			$sql = "INSERT INTO `$table`($fields) VALUES($values)";
			return $this->connect()->query( $sql );

		}

	}

	public function deleteRecord( $table, $conditions='' ) {

		if ( $conditions != '' ) {

			$sql = "DELETE FROM `$table` WHERE";
			$count = count( $conditions );
			$i = 1;

			foreach( $conditions as $key=>$value ) {
				if ( $count == $i ) {
					$sql .= " `$key`='$value' ";
				} else {
					$sql .= " `$key`='$value' AND";
				}
				$i++;
			}

			return $this->connect()->query( $sql );
		}
	}

	public function updateRecord( $table, $arr='', $condition='' ) {

		if ( $arr != '' ) {

			$sql = " UPDATE `$table` SET ";
			$c = count( $arr );
			$i = 1;

			foreach( $arr as $key => $value ) {
				if ( $c == $i ) {
					$sql .= " `$key`='$value'";
				} else {
					$sql .= " `$key`='$value',";
				}
				$i++;
			}

			foreach( $condition as $key => $value ) {
				$sql .= " WHERE `$key`='$value'";
			}
			
			return $this->connect()->query( $sql ); 
		}
	}
}


?>