<?php

namespace WSDLI;

/**
 * getFolderTreeParam
 */
class getFolderTreeParam {
	/**
	 * @access public
	 * @var string
	 */
	public $companyHandle;
	/**
	 * @access public
	 * @var string
	 */
	public $accessUserHandle;
	/**
	 * @access public
	 * @var string
	 */
	public $accessGroupHandle;
	/**
	 * @access public
	 * @var string
	 */
	public $folderPath;
	/**
	 * @access public
	 * @var integer
	 */
	public $depth;
	/**
	 * @access public
	 * @var StringArray
	 */
	public $assetTypeArray;
	/**
	 * @access public
	 * @var StringArray
	 */
	public $responseFieldArray;
	/**
	 * @access public
	 * @var StringArray
	 */
	public $excludeFieldArray;
}