<?php

namespace WSDLI;

/**
 * submitJobParam
 */
class submitJobParam {
	/**
	 * @access public
	 * @var string
	 */
	public $companyHandle;
	/**
	 * @access public
	 * @var string
	 */
	public $userHandle;
	/**
	 * @access public
	 * @var string
	 */
	public $jobName;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $execTime;
	/**
	 * @access public
	 * @var string
	 */
	public $execSchedule;
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