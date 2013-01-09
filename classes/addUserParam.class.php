<?php

namespace WSDLI;

/**
 * addUserParam
 */
class addUserParam {
	/**
	 * @access public
	 * @var string
	 */
	public $firstName;
	/**
	 * @access public
	 * @var string
	 */
	public $lastName;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var string
	 */
	public $role;
	/**
	 * @access public
	 * @var string
	 */
	public $password;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $passwordExpires;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isValid;
	/**
	 * @access public
	 * @var HandleArray
	 */
	public $companyHandleArray;
}