<?php

/**
 * PostgreSQL 10.5 support
 *
 */

include_once('./classes/database/Postgres.php');

class Postgres105 extends Postgres {

	var $major_version = 10.5;

	/**
	 * Constructor
	 * @param $conn The database connection
	 */
	function __construct($conn) {
		parent::__construct($conn);
	}

	// Help functions

	function getHelpPages() {
		include_once('./help/PostgresDoc105.php');
		return $this->help_page;
	}

}
?>
