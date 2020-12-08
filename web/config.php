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
        $this->dbname = 'ceddesk';

        return new mysqli($this->servername, $this->username, $this->password, $this->dbname );
    }
} 
class Query extends config{

	
}

?>