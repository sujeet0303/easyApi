<?php
/**
 * User: Sujeet
 */

class Location {

	function __construct(){
		global $objDB;
		$objDB->tableName = 'web_area';
	}

	function getLocation(){
		global $objDB;
		$objDB->select(array('address','zipcode'), '', 'ORDER BY zipcode','',1);
		$allEntities = $objDB->fetchAllMultiRecordsAsObject();
		return $allEntities;
	}
}