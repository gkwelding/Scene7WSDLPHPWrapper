<?php

namespace WSDLI;

/**
 * ImageInfo
 */
class ImageInfo {
	/**
	 * @access public
	 * @var string
	 */
	public $originalPath;
	/**
	 * @access public
	 * @var string
	 */
	public $originalFile;
	/**
	 * @access public
	 * @var string
	 */
	public $optimizedPath;
	/**
	 * @access public
	 * @var string
	 */
	public $optimizedFile;
	/**
	 * @access public
	 * @var string
	 */
	public $maskPath;
	/**
	 * @access public
	 * @var string
	 */
	public $maskFile;
	/**
	 * @access public
	 * @var integer
	 */
	public $width;
	/**
	 * @access public
	 * @var integer
	 */
	public $height;
	/**
	 * @access public
	 * @var integer
	 */
	public $fileSize;
	/**
	 * @access public
	 * @var double
	 */
	public $resolution;
	/**
	 * @access public
	 * @var string
	 */
	public $sku;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var string
	 */
	public $comments;
	/**
	 * @access public
	 * @var string
	 */
	public $userData;
	/**
	 * @access public
	 * @var integer
	 */
	public $anchorX;
	/**
	 * @access public
	 * @var integer
	 */
	public $anchorY;
	/**
	 * @access public
	 * @var string
	 */
	public $urlModifier;
	/**
	 * @access public
	 * @var string
	 */
	public $urlPostApplyModifier;
	/**
	 * @access public
	 * @var ZoomTargetArray
	 */
	public $zoomTargets;
	/**
	 * @access public
	 * @var MaskArray
	 */
	public $masks;
	/**
	 * @access public
	 * @var ImageMapArray
	 */
	public $imageMaps;
}