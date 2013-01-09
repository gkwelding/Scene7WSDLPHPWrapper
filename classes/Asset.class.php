<?php

namespace WSDLI;

/**
 * Asset
 */
class Asset {
	/**
	 * @access public
	 * @var string
	 */
	public $assetHandle;
	/**
	 * @access public
	 * @var string
	 */
	public $type;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $folder;
	/**
	 * @access public
	 * @var string
	 */
	public $folderHandle;
	/**
	 * @access public
	 * @var boolean
	 */
	public $readyForPublish;
	/**
	 * @access public
	 * @var string
	 */
	public $projects;
	/**
	 * @access public
	 * @var string
	 */
	public $ipsImageUrl;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $created;
	/**
	 * @access public
	 * @var string
	 */
	public $createUser;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModified;
	/**
	 * @access public
	 * @var string
	 */
	public $lastModifyUser;
	/**
	 * @access public
	 * @var MetadataArray
	 */
	public $metadataArray;
	/**
	 * @access public
	 * @var ImageInfo
	 */
	public $imageInfo;
	/**
	 * @access public
	 * @var TemplateInfo
	 */
	public $templateInfo;
	/**
	 * @access public
	 * @var WatermarkInfo
	 */
	public $watermarkInfo;
	/**
	 * @access public
	 * @var RenderSceneInfo
	 */
	public $renderSceneInfo;
	/**
	 * @access public
	 * @var VignetteInfo
	 */
	public $vignetteInfo;
	/**
	 * @access public
	 * @var CabinetInfo
	 */
	public $cabinetInfo;
	/**
	 * @access public
	 * @var WindowCoveringInfo
	 */
	public $windowCoveringInfo;
	/**
	 * @access public
	 * @var IccProfileInfo
	 */
	public $iccProfileInfo;
	/**
	 * @access public
	 * @var FontInfo
	 */
	public $fontInfo;
	/**
	 * @access public
	 * @var XslInfo
	 */
	public $xslInfo;
	/**
	 * @access public
	 * @var ViewerSwfInfo
	 */
	public $viewerSwfInfo;
	/**
	 * @access public
	 * @var XmlInfo
	 */
	public $xmlInfo;
	/**
	 * @access public
	 * @var SvgInfo
	 */
	public $svgInfo;
	/**
	 * @access public
	 * @var ZipInfo
	 */
	public $zipInfo;
	/**
	 * @access public
	 * @var VideoInfo
	 */
	public $videoInfo;
	/**
	 * @access public
	 * @var AcoInfo
	 */
	public $acoInfo;
	/**
	 * @access public
	 * @var PdfInfo
	 */
	public $pdfInfo;
	/**
	 * @access public
	 * @var PsdInfo
	 */
	public $psdInfo;
	/**
	 * @access public
	 * @var FlashInfo
	 */
	public $flashInfo;
	/**
	 * @access public
	 * @var InDesignInfo
	 */
	public $inDesignInfo;
	/**
	 * @access public
	 * @var PermissionArray
	 */
	public $permissions;
}