<?php

namespace WSDLI;

/**
 * ActiveJob
 */
class ActiveJob {
	/**
	 * @access public
	 * @var string
	 */
	public $companyHandle;
	/**
	 * @access public
	 * @var string
	 */
	public $jobHandle;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $originalName;
	/**
	 * @access public
	 * @var string
	 */
	public $type;
	/**
	 * @access public
	 * @var string
	 */
	public $state;
	/**
	 * @access public
	 * @var string
	 */
	public $submitUserEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $serverName;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalSize;
	/**
	 * @access public
	 * @var integer
	 */
	public $progress;
	/**
	 * @access public
	 * @var string
	 */
	public $progressMessage;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastProgressUpdate;
	/**
	 * @access public
	 * @var ImageServingPublishJob
	 */
	public $imageServingPublishJob;
	/**
	 * @access public
	 * @var ImageRenderingPublishJob
	 */
	public $imageRenderingPublishJob;
	/**
	 * @access public
	 * @var VideoPublishJob
	 */
	public $videoPublishJob;
	/**
	 * @access public
	 * @var ServerDirectoryPublishJob
	 */
	public $serverDirectoryPublishJob;
	/**
	 * @access public
	 * @var UploadDirectoryJob
	 */
	public $uploadDirectoryJob;
	/**
	 * @access public
	 * @var UploadUrlsJob
	 */
	public $uploadUrlsJob;
}