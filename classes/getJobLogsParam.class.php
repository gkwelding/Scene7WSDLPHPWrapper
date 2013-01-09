<?php

namespace WSDLI;

/**
 * getJobLogsParam
 */
class getJobLogsParam {
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
	public $sortBy;
	/**
	 * @access public
	 * @var string
	 */
	public $sortDirection;
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
	public $numRows;
}