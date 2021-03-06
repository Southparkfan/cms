<?php
/*
** Functions file for Southparkfan's cms' basic functions.
** Since: 09/2014

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
if (file_exists('config.php')) {
	require 'config.php';
} else {
	die('The file config.php does not exist. See the config.sample.php file for an example of config.php.');
}

require_once 'inc/Database.php';
$db = new Database( $DBserver, $DBuser, $DBuser, $DBname );
