<?php

/**
 * PostgreSQL 10.4 support
 *
 */

include_once('./classes/database/Postgres.php');

class Postgres104 extends Postgres {

	var $major_version = 10.4;

	/**
	 * Constructor
	 * @param $conn The database connection
	 */
	function __construct($conn) {
		parent::__construct($conn);
	}

	// Help functions

	function getHelpPages() {
		include_once('./help/PostgresDoc104.php');
		return $this->help_page;
	}

}
?>
