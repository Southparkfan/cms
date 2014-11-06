<?php
class Database {

  private $DBserver;
  private $DBuser;
  private $DBpassword;
  private $DBname;
  private $query;
  
  function __construct($DBserver, $DBuser, $DBpassword, $DBname) {
    $this->DBserver = $DBserver;
    $this->DBuser = $DBuser;
    $this->DBpassword = $DBpassword;
    $this->DBname = $DBname;
  }
  
  public function connect($DBserver, $DBuser, DBpassword, $DBname) {
    $DBconnection = mysql_connect($this->DBserver, $this->DBuser, $this->DBpassword) or die(mysql_error());
    mysql_select_db($this->DBname, $DBconnection) or die(mysql_error());
  }
  
  public function query($query) {
    global $DBconnection;
    $this->query = mysql_query($query, $DBconnection) or die(mysql_error());
  }
  
}
