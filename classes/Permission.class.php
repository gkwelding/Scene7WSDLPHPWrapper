<?php

namespace WSDLI;

/**
 * Permission
 */
class Permission {
	/**
	 * @access public
	 * @var string
	 */
	public $groupHandle;
	/**
	 * @access public
	 * @var string
	 */
	public $groupName;
	/**
	 * @access public
	 * @var string
	 */
	public $permissionType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isAllowed;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isOverride;
}