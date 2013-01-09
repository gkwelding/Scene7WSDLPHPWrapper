<?php

namespace WSDLI;

/**
 * PermissionUpdate
 */
class PermissionUpdate {
	/**
	 * @access public
	 * @var string
	 */
	public $groupHandle;
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