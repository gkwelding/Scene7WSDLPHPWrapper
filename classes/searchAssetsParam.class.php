<?php

namespace WSDLI;

/**
 * searchAssetsParam
 */
class searchAssetsParam {
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
	public $folder;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeSubfolders;
	/**
	 * @access public
	 * @var string
	 */
	public $publishState;
	/**
	 * @access public
	 * @var string
	 */
	public $conditionMatchMode;
	/**
	 * @access public
	 * @var StringArray
	 */
	public $keywordArray;
	/**
	 * @access public
	 * @var string
	 */
	public $systemFieldMatchMode;
	/**
	 * @access public
	 * @var SystemFieldConditionArray
	 */
	public $systemFieldConditionArray;
	/**
	 * @access public
	 * @var string
	 */
	public $metadataMatchMode;
	/**
	 * @access public
	 * @var MetadataConditionArray
	 */
	public $metadataConditionArray;
	/**
	 * @access public
	 * @var StringArray
	 */
	public $assetTypeArray;
	/**
	 * @access public
	 * @var string
	 */
	public $projectHandle;
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
	/**
	 * @access public
	 * @var string
	 */
	public $sortBy;
	/**
	 * @access public
	 * @var string
	 */
	public $sortDirection;
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