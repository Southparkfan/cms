<?php
class Database {

  private $DBserver;
  private $DBuser;
  private $DBpassword;
  public $DBname;
  public $query;
  
	function __construct($DBserver, $DBuser, $DBpassword, $DBname) {
	    $this->DBserver = $DBserver;
	    $this->DBuser = $DBuser;
	    $this->DBpassword = $DBpassword;
	    $this->DBname = $DBname;
	    $this->connect($this->DBserver, $this->DBuser, $this->DBpassword, $this->DBname);
	}
  
	function connect($DBserver, $DBuser, $DBpassword, $DBname) {
    		$this->DBconnection = mysqli_connect($this->DBserver, $this->DBuser, $this->DBpassword, $this->DBname) or die(mysqli_error($this->DBconnection));
	}
  
	function query($query) {
    		$this->query = mysqli_query($this->DBconnection, $query) or die(mysqli_error($this->DBconnection));
	}
  
}
