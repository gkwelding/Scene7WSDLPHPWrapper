<?php

namespace WSDLI;

/**
 * MetadataField
 */
class MetadataField {
	/**
	 * @access public
	 * @var string
	 */
	public $fieldHandle;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $type;
	/**
	 * @access public
	 * @var string
	 */
	public $defaultValue;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isRequired;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isUserDefined;
}