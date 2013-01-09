<?php

namespace WSDLI;

/**
 * setFolderPermissionsParam
 */
class setFolderPermissionsParam {
	/**
	 * @access public
	 * @var string
	 */
	public $companyHandle;
	/**
	 * @access public
	 * @var string
	 */
	public $folderHandle;
	/**
	 * @access public
	 * @var boolean
	 */
	public $setChildren;
	/**
	 * @access public
	 * @var PermissionUpdateArray
	 */
	public $permissionArray;
}