<?php

namespace WSDLI;

/**
 * getUsersParam
 */
class getUsersParam {
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeInvalid;
	/**
	 * @access public
	 * @var HandleArray
	 */
	public $companyHandleArray;
	/**
	 * @access public
	 * @var HandleArray
	 */
	public $groupHandleArray;
	/**
	 * @access public
	 * @var StringArray
	 */
	public $userRoleArray;
	/**
	 * @access public
	 * @var string
	 */
	public $charFilterField;
	/**
	 * @access public
	 * @var string
	 */
	public $charFilter;
	/**
	 * @access public
	 * @var string
	 */
	public $sortBy;
	/**
	 * @access public
	 * @var integer
	 */
	public $recordsPerPage;
	/**
	 * @access public
	 * @var integer
	 */
	public $resultsPage;
}