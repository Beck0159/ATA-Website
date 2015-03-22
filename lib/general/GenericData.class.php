<?php

require_once "base/G12Object.class.php";
require_once "base/G12SchemaData.class.php";

class Generic extends G12Object
{
	private $dbHelper;
	private $className;
	private $table_name;
	private $primaryKeyName;
	public function __construct($className, $table_name, $primaryKeyName, $schema)
	{
		parent::__construct($schema);
		$this->dbHelper = new ToBeRecordSetHelper(DB_NAME, $table_name);
		$this->className = $className;
		$this->table_name = $table_name;
		$this->primaryKeyName = $primaryKeyName;
	}
	
	public function getPrimaryKeyName()
	{
		return $this->primaryKeyName;
	}
	
	//TODO
	//public function updateRow($postArray, $params)
	//{
	//	$this->isInsert = false;
	//}
	
	public function insertRow($postArray, $params)
	{
		$this->isInsert = true;
		if($this->loadParams($postArray, $params))
		{
			$errTest = $this->validateFields($params);
			if($errTest === false)
			{
				$id = $this->dbHelper->insertRow($params, $this->primaryKeyName);
				if($id == false)
				{
					$extErrMsg = $this->table_name . ": " . $this->dbHelper->getErrMsg() . " Row Values: " . print_r($params, true);
					return $this->returnErrorArray("Failed to insert Data", RETVAL::DB_FAILED_INSERT, $extErrMsg);
				}
				else
				{
					return array(RETVAL::STATUS => RETVAL::DB_SUCCESS, $this->primaryKeyName => $id);
				}
			}
			else
			{
				return $errTest;
			}
		}
		else
		{
			$extErrMsg = $this->className . ".create:  Row Values: " . print_r($params, true);
			return $this->returnErrorArray("Missing or invalid parameter values.", RETVAL::DB_FAILED_INSERT, $extErrMsg);
		}
	}
	
	public function selectItems()
	{
		$sql = 'SELECT * FROM `' . $this->table_name . '` ;';
		$rowSet = $this->dbHelper->getRowSet($sql);
		if(empty($rowSet))
		{
			return array(RETVAL::STATUS => RETVAL::DB_SUCCESS, self::FIELDS => array()); //return empty array
		}
		else if($rowSet == false)
		{
			$extErrMsg = $this->className . ".getList: " . $this->dbHelper->getErrMsg();
			return $this->returnErrorArray("Failed to retrieve Items", RETVAL::DB_FAILED_QUERY, $extErrMsg);
		}
		else
		{
			$this->logger->debug("LIST TEST" . print_r($rowSet, true));
			return array(RETVAL::STATUS => RETVAL::DB_SUCCESS, self::FIELDS => $rowSet);
		}
	}
	
	public function getItemById($id)
	{

		if(is_array($id)) //get the value
		{
			$id = $id[$this->primaryKeyName];
		}
		//TODO make into prepared statement
		
		$sql = 'SELECT * FROM `' . $this->table_name . '` WHERE `' . $this->primaryKeyName . '` = ' . $id;
		$rowSet = $this->dbHelper->getRowSet($sql);
		if($rowSet == false)
		{
			$xtErrMsg =  "Failed Query for " . $this->className . " " . $this->dbHelper->getErrMsg();
			return $this->returnErrorArray("Database Error", RETVAL::DB_FAILED_QUERY, $xtErrMsg);
		}
		elseif(empty($rowSet))
		{
			return $this->returnErrorArray("No records for this item",
				RETVAL::EMPTY_RESULT_SET, "No records for " . $this->className . ".get using " .  $sql . 
				" postArray[" . $this->primaryKeyName . "] = " . $postArray[$this->primaryKeyName]);
		}
		else
		{
			return array(RETVAL::STATUS => RETVAL::DB_SUCCESS,
					self::FIELD => $rowSet[0]);
		}
	}

}