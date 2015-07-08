<?php
/**
 * User: Sujeet
 */

class Location {

	function __construct(){
		global $objDB;
		$objDB->tableName = 'area';
	}

	function getLocation(){
		global $objDB;
		$objDB->select(array('id','name'), '', 'Order by name');
		$allEntities = $objDB->fetchAllMultiRecordsAsObject();
		return $allEntities[0];
	}
}