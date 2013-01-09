<?php

namespace WSDLI;

/**
 * ScheduledJob
 */
class ScheduledJob {
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
	public $submitUserEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $execSchedule;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $nextFireTime;
	/**
	 * @access public
	 * @var string
	 */
	public $timeZone;
	/**
	 * @access public
	 * @var string
	 */
	public $triggerState;
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