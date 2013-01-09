<?php

namespace WSDLI;

/**
 * UploadDirectoryJob
 */
class UploadDirectoryJob {
	/**
	 * @access public
	 * @var string
	 */
	public $destFolder;
	/**
	 * @access public
	 * @var string
	 */
	public $serverDir;
	/**
	 * @access public
	 * @var boolean
	 */
	public $overwrite;
	/**
	 * @access public
	 * @var boolean
	 */
	public $readyForPublish;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeSubfolders;
	/**
	 * @access public
	 * @var boolean
	 */
	public $createMask;
	/**
	 * @access public
	 * @var boolean
	 */
	public $processMetadataFiles;
	/**
	 * @access public
	 * @var ManualCropOptions
	 */
	public $manualCropOptions;
	/**
	 * @access public
	 * @var AutoColorCropOptions
	 */
	public $autoColorCropOptions;
	/**
	 * @access public
	 * @var AutoTransparentCropOptions
	 */
	public $autoTransparentCropOptions;
	/**
	 * @access public
	 * @var PhotoshopOptions
	 */
	public $photoshopOptions;
	/**
	 * @access public
	 * @var PostScriptOptions
	 */
	public $postScriptOptions;
	/**
	 * @access public
	 * @var ColorManagementOptions
	 */
	public $colorManagementOptions;
	/**
	 * @access public
	 * @var HandleArray
	 */
	public $projectHandleArray;
	/**
	 * @access public
	 * @var string
	 */
	public $emailSetting;
	/**
	 * @access public
	 * @var boolean
	 */
	public $postJobOnlyIfFiles;
	/**
	 * @access public
	 * @var string
	 */
	public $postHttpUrl;
	/**
	 * @access public
	 * @var ImageServingPublishJob
	 */
	public $postImageServingPublishJob;
	/**
	 * @access public
	 * @var ImageRenderingPublishJob
	 */
	public $postImageRenderingPublishJob;
	/**
	 * @access public
	 * @var VideoPublishJob
	 */
	public $postVideoPublishJob;
}