<?php

namespace WSDLI;

/**
 * User
 */
class User {
	/**
	 * @access public
	 * @var string
	 */
	public $userHandle;
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
	 * @var boolean
	 */
	public $isValid;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $passwordExpires;
}