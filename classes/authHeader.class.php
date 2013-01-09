<?php

namespace WSDLI;

/**
 * authHeader
 */
class authHeader {
	/**
	 * @access public
	 * @var string
	 */
	public $user;
	/**
	 * @access public
	 * @var string
	 */
	public $password;
	/**
	 * @access public
	 * @var string
	 */
	public $locale;
	/**
	 * @access public
	 * @var string
	 */
	public $appName;
	/**
	 * @access public
	 * @var string
	 */
	public $appVersion;
	/**
	 * @access public
	 * @var boolean
	 */
	public $gzipResponse;
	/**
	 * @access public
	 * @var integer
	 */
	public $faultHttpStatusCode;
}