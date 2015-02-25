<?php
/*
** MySQL database functions.
** Since: 11/2014

** This file is part of Southparkfan's cms.

** Southparkfan's cms is free software: you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation, either version 3 of the License, or
** (at your option) any later version.

** Southparkfan's cms is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
** GNU General Public License for more details.

** You should have received a copy of the GNU General Public License
** along with Southparkfan's cms.  If not, see <http://www.gnu.org/licenses/>.

*/

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
  
	function connect() {
    		$this->DBconnection = mysqli_connect($this->DBserver, $this->DBuser, $this->DBpassword, $this->DBname) or die(mysqli_error($this->DBconnection));
	}
  
	function query($query) {
    		$this->query = mysqli_query($this->DBconnection, $query) or die(mysqli_error($this->DBconnection));
	}
  
}
