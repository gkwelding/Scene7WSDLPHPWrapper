<?php

namespace WSDLI;

/**
 * Folder
 */
class Folder {
	/**
	 * @access public
	 * @var string
	 */
	public $folderHandle;
	/**
	 * @access public
	 * @var string
	 */
	public $path;
	/**
	 * @access public
	 * @var PermissionArray
	 */
	public $permissions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $hasSubfolders;
	/**
	 * @access public
	 * @var FolderArray
	 */
	public $subfolderArray;
}