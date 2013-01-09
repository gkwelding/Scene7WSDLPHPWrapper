<?php

namespace WSDLI;

/**
 * JobLog
 */
class JobLog {
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
	public $jobName;
	/**
	 * @access public
	 * @var string
	 */
	public $submitUserEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $logType;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var integer
	 */
	public $fileSuccessCount;
	/**
	 * @access public
	 * @var integer
	 */
	public $fileErrorCount;
	/**
	 * @access public
	 * @var integer
	 */
	public $fileWarningCount;
	/**
	 * @access public
	 * @var integer
	 */
	public $fileDuplicateCount;
	/**
	 * @access public
	 * @var integer
	 */
	public $fileUpdateCount;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalFileCount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $fatalError;
	/**
	 * @access public
	 * @var JobLogDetailArray
	 */
	public $detailArray;
}