<?php

/**
 * PostgreSQL 12 support
 *
 */

include_once('./classes/database/Postgres.php');

class Postgres12 extends Postgres {

	var $major_version = 12;

	/**
	 * Constructor
	 * @param $conn The database connection
	 */
	function __construct($conn) {
		parent::__construct($conn);
	}

	/**
	 * Returns the current default_with_oids setting
	 * @return default_with_oids setting
	 */
	function getDefaultWithOid() {

		$sql = "SHOW default_with_oids";

		return $this->selectField($sql, 'default_with_oids');
	}

    /**
	 * Checks to see whether or not a table has a unique id column
	 * @param $table The table name
	 * @return True if it has a unique id, false otherwise
	 * @return null error
	 **/
	function hasObjectID($table) {
		$c_schema = $this->_schema;
		$this->clean($c_schema);
		$this->clean($table);
	}


	// Help functions

	function getHelpPages() {
		include_once('./help/PostgresDoc12.php');
		return $this->help_page;
	}


	// Capabilities
	function hasServerOids() { return true; }

}
?>
