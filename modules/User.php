<?php
/**
 * User: Sujeet
 * Date: 29/10/14
 * Time: 9:20 AM
 */

class User {
	function __construct(){
		global $objDB;
		$objDB->tableName = 'users';
	}

	/**
	 * get user Id
	 * @param $mobile
	 * @return mixed
	 */
	function getUserId($mobile){
		global $objDB;
		$objDB->select('id', array('mobileNumber'=>$mobile), '', 'Limit 1');
		$allEntities = $objDB->fetchAllMultiRecordsAsObject();
		return $allEntities[0][0]->id;
	}

	/**
	 * Add user
	 * @param $name
	 * @param $phone
	 * @param $address
	 * @param $email
	 * @param $placeId
	 * @param $landmark
	 */
	function addUser($name, $phone, $address, $email, $placeId, $landmark) {
		global $objDB;
		$objDB->insertUpdate(array(
				'firstName'=>$name,
				'Addressline1'=>$address,
				'mobileNumber'=> $phone,
				'email'=>$email,
				'areaId'=> $placeId,
				'landmark'=>$landmark,
				'lastvisited'=> date('Y-m-d H:i:s'),
				'created' => date('Y-m-d H:i:s')
			),
			" `firstName` = '$name', `Addressline1`= '$address', `email`='$email', `areaId`='$placeId', `landmark` = '$landmark'"
		);

		return $objDB->insertedID() ? $objDB->insertedId : $this->getUserId($phone);
	}
}