<?php

namespace WSDLI;

/**
 * IpsApiService
 * @author WSDLInterpreter
 */
class IpsApiService extends SoapClient {
	/**
	 * Default class map for wsdl=>php
	 * @access private
	 * @var array
	 */
	private static $classmap = array(
		"Asset" => "Asset",
		"AssetArray" => "AssetArray",
		"Metadata" => "Metadata",
		"MetadataArray" => "MetadataArray",
		"ImageInfo" => "ImageInfo",
		"TemplateInfo" => "TemplateInfo",
		"WatermarkInfo" => "WatermarkInfo",
		"RenderSceneInfo" => "RenderSceneInfo",
		"VignetteInfo" => "VignetteInfo",
		"CabinetInfo" => "CabinetInfo",
		"WindowCoveringInfo" => "WindowCoveringInfo",
		"IccProfileInfo" => "IccProfileInfo",
		"FontInfo" => "FontInfo",
		"XslInfo" => "XslInfo",
		"ViewerSwfInfo" => "ViewerSwfInfo",
		"XmlInfo" => "XmlInfo",
		"SvgInfo" => "SvgInfo",
		"ZipInfo" => "ZipInfo",
		"VideoInfo" => "VideoInfo",
		"AcoInfo" => "AcoInfo",
		"PdfInfo" => "PdfInfo",
		"PsdInfo" => "PsdInfo",
		"FlashInfo" => "FlashInfo",
		"InDesignInfo" => "InDesignInfo",
		"ZoomTarget" => "ZoomTarget",
		"ZoomTargetArray" => "ZoomTargetArray",
		"Mask" => "Mask",
		"MaskArray" => "MaskArray",
		"ImageMap" => "ImageMap",
		"ImageMapArray" => "ImageMapArray",
		"ImageSetMember" => "ImageSetMember",
		"ImageSetMemberArray" => "ImageSetMemberArray",
		"ImageSetMemberUpdate" => "ImageSetMemberUpdate",
		"ImageSetMemberUpdateArray" => "ImageSetMemberUpdateArray",
		"ImageFormat" => "ImageFormat",
		"ImageFormatArray" => "ImageFormatArray",
		"Company" => "Company",
		"CompanyArray" => "CompanyArray",
		"Group" => "Group",
		"GroupArray" => "GroupArray",
		"Folder" => "Folder",
		"FolderArray" => "FolderArray",
		"Project" => "Project",
		"ProjectArray" => "ProjectArray",
		"DiskUsage" => "DiskUsage",
		"DiskUsageArray" => "DiskUsageArray",
		"MetadataField" => "MetadataField",
		"MetadataFieldArray" => "MetadataFieldArray",
		"MetadataUpdate" => "MetadataUpdate",
		"MetadataUpdateArray" => "MetadataUpdateArray",
		"MetadataCondition" => "MetadataCondition",
		"MetadataConditionArray" => "MetadataConditionArray",
		"User" => "User",
		"UserArray" => "UserArray",
		"HandleArray" => "HandleArray",
		"StringArray" => "StringArray",
		"SystemFieldCondition" => "SystemFieldCondition",
		"SystemFieldConditionArray" => "SystemFieldConditionArray",
		"PermissionUpdate" => "PermissionUpdate",
		"PermissionUpdateArray" => "PermissionUpdateArray",
		"Permission" => "Permission",
		"PermissionArray" => "PermissionArray",
		"ActiveJob" => "ActiveJob",
		"ActiveJobArray" => "ActiveJobArray",
		"ScheduledJob" => "ScheduledJob",
		"ScheduledJobArray" => "ScheduledJobArray",
		"ManualCropOptions" => "ManualCropOptions",
		"AutoColorCropOptions" => "AutoColorCropOptions",
		"AutoTransparentCropOptions" => "AutoTransparentCropOptions",
		"PhotoshopOptions" => "PhotoshopOptions",
		"PostScriptOptions" => "PostScriptOptions",
		"ColorManagementOptions" => "ColorManagementOptions",
		"UploadUrl" => "UploadUrl",
		"UploadUrlArray" => "UploadUrlArray",
		"ImageServingPublishJob" => "ImageServingPublishJob",
		"ImageRenderingPublishJob" => "ImageRenderingPublishJob",
		"VideoPublishJob" => "VideoPublishJob",
		"ServerDirectoryPublishJob" => "ServerDirectoryPublishJob",
		"UploadDirectoryJob" => "UploadDirectoryJob",
		"UploadUrlsJob" => "UploadUrlsJob",
		"JobLogDetail" => "JobLogDetail",
		"JobLogDetailArray" => "JobLogDetailArray",
		"JobLog" => "JobLog",
		"JobLogArray" => "JobLogArray",
		"searchAssetsParam" => "searchAssetsParam",
		"searchAssetsReturn" => "searchAssetsReturn",
		"getAssetsParam" => "getAssetsParam",
		"getAssetsReturn" => "getAssetsReturn",
		"moveAssetParam" => "moveAssetParam",
		"moveAssetReturn" => "moveAssetReturn",
		"renameAssetParam" => "renameAssetParam",
		"renameAssetReturn" => "renameAssetReturn",
		"deleteAssetParam" => "deleteAssetParam",
		"deleteAssetReturn" => "deleteAssetReturn",
		"setAssetPublishStateParam" => "setAssetPublishStateParam",
		"setAssetPublishStateReturn" => "setAssetPublishStateReturn",
		"getOriginalFilePathsParam" => "getOriginalFilePathsParam",
		"getOriginalFilePathsReturn" => "getOriginalFilePathsReturn",
		"saveZoomTargetParam" => "saveZoomTargetParam",
		"saveZoomTargetReturn" => "saveZoomTargetReturn",
		"deleteZoomTargetParam" => "deleteZoomTargetParam",
		"deleteZoomTargetReturn" => "deleteZoomTargetReturn",
		"saveImageMapParam" => "saveImageMapParam",
		"saveImageMapReturn" => "saveImageMapReturn",
		"deleteImageMapParam" => "deleteImageMapParam",
		"deleteImageMapReturn" => "deleteImageMapReturn",
		"createImageSetParam" => "createImageSetParam",
		"createImageSetReturn" => "createImageSetReturn",
		"setImageSetMembersParam" => "setImageSetMembersParam",
		"setImageSetMembersReturn" => "setImageSetMembersReturn",
		"getImageSetMembersParam" => "getImageSetMembersParam",
		"getImageSetMembersReturn" => "getImageSetMembersReturn",
		"getAllCompaniesParam" => "getAllCompaniesParam",
		"getAllCompaniesReturn" => "getAllCompaniesReturn",
		"addCompanyParam" => "addCompanyParam",
		"addCompanyReturn" => "addCompanyReturn",
		"getCompanyMembersParam" => "getCompanyMembersParam",
		"getCompanyMembersReturn" => "getCompanyMembersReturn",
		"addUserParam" => "addUserParam",
		"addUserReturn" => "addUserReturn",
		"generatePasswordParam" => "generatePasswordParam",
		"generatePasswordReturn" => "generatePasswordReturn",
		"setPasswordParam" => "setPasswordParam",
		"setPasswordReturn" => "setPasswordReturn",
		"setUserInfoParam" => "setUserInfoParam",
		"setUserInfoReturn" => "setUserInfoReturn",
		"getUserInfoParam" => "getUserInfoParam",
		"getUserInfoReturn" => "getUserInfoReturn",
		"getAllUsersParam" => "getAllUsersParam",
		"getAllUsersReturn" => "getAllUsersReturn",
		"getUsersParam" => "getUsersParam",
		"getUsersReturn" => "getUsersReturn",
		"getUserCharsParam" => "getUserCharsParam",
		"getUserCharsReturn" => "getUserCharsReturn",
		"setCompanyMembershipParam" => "setCompanyMembershipParam",
		"setCompanyMembershipReturn" => "setCompanyMembershipReturn",
		"addCompanyMembershipParam" => "addCompanyMembershipParam",
		"addCompanyMembershipReturn" => "addCompanyMembershipReturn",
		"removeCompanyMembershipParam" => "removeCompanyMembershipParam",
		"removeCompanyMembershipReturn" => "removeCompanyMembershipReturn",
		"getCompanyMembershipParam" => "getCompanyMembershipParam",
		"getCompanyMembershipReturn" => "getCompanyMembershipReturn",
		"checkLoginParam" => "checkLoginParam",
		"checkLoginReturn" => "checkLoginReturn",
		"getCompanyInfoParam" => "getCompanyInfoParam",
		"getCompanyInfoReturn" => "getCompanyInfoReturn",
		"getImageFormatsParam" => "getImageFormatsParam",
		"getImageFormatsReturn" => "getImageFormatsReturn",
		"saveImageFormatParam" => "saveImageFormatParam",
		"saveImageFormatReturn" => "saveImageFormatReturn",
		"deleteImageFormatParam" => "deleteImageFormatParam",
		"deleteImageFormatReturn" => "deleteImageFormatReturn",
		"getGroupsParam" => "getGroupsParam",
		"getGroupsReturn" => "getGroupsReturn",
		"saveGroupParam" => "saveGroupParam",
		"saveGroupReturn" => "saveGroupReturn",
		"deleteGroupParam" => "deleteGroupParam",
		"deleteGroupReturn" => "deleteGroupReturn",
		"getGroupMembershipParam" => "getGroupMembershipParam",
		"getGroupMembershipReturn" => "getGroupMembershipReturn",
		"setGroupMembershipParam" => "setGroupMembershipParam",
		"setGroupMembershipReturn" => "setGroupMembershipReturn",
		"addGroupMembershipParam" => "addGroupMembershipParam",
		"addGroupMembershipReturn" => "addGroupMembershipReturn",
		"removeGroupMembershipParam" => "removeGroupMembershipParam",
		"removeGroupMembershipReturn" => "removeGroupMembershipReturn",
		"getGroupMembersParam" => "getGroupMembersParam",
		"getGroupMembersReturn" => "getGroupMembersReturn",
		"setGroupMembersParam" => "setGroupMembersParam",
		"setGroupMembersReturn" => "setGroupMembersReturn",
		"addGroupMembersParam" => "addGroupMembersParam",
		"addGroupMembersReturn" => "addGroupMembersReturn",
		"removeGroupMembersParam" => "removeGroupMembersParam",
		"removeGroupMembersReturn" => "removeGroupMembersReturn",
		"getFoldersParam" => "getFoldersParam",
		"getFoldersReturn" => "getFoldersReturn",
		"getFolderTreeParam" => "getFolderTreeParam",
		"getFolderTreeReturn" => "getFolderTreeReturn",
		"createFolderParam" => "createFolderParam",
		"createFolderReturn" => "createFolderReturn",
		"renameFolderParam" => "renameFolderParam",
		"renameFolderReturn" => "renameFolderReturn",
		"deleteFolderParam" => "deleteFolderParam",
		"deleteFolderReturn" => "deleteFolderReturn",
		"getProjectsParam" => "getProjectsParam",
		"getProjectsReturn" => "getProjectsReturn",
		"getDiskUsageParam" => "getDiskUsageParam",
		"getDiskUsageReturn" => "getDiskUsageReturn",
		"getMetadataFieldsParam" => "getMetadataFieldsParam",
		"getMetadataFieldsReturn" => "getMetadataFieldsReturn",
		"saveMetadataFieldParam" => "saveMetadataFieldParam",
		"saveMetadataFieldReturn" => "saveMetadataFieldReturn",
		"setAssetMetadataParam" => "setAssetMetadataParam",
		"setAssetMetadataReturn" => "setAssetMetadataReturn",
		"getUniqueMetadataValuesParam" => "getUniqueMetadataValuesParam",
		"getUniqueMetadataValuesReturn" => "getUniqueMetadataValuesReturn",
		"updateFolderPermissionsParam" => "updateFolderPermissionsParam",
		"updateFolderPermissionsReturn" => "updateFolderPermissionsReturn",
		"setFolderPermissionsParam" => "setFolderPermissionsParam",
		"setFolderPermissionsReturn" => "setFolderPermissionsReturn",
		"removeFolderPermissionsParam" => "removeFolderPermissionsParam",
		"removeFolderPermissionsReturn" => "removeFolderPermissionsReturn",
		"updateAssetPermissionsParam" => "updateAssetPermissionsParam",
		"updateAssetPermissionsReturn" => "updateAssetPermissionsReturn",
		"setAssetPermissionsParam" => "setAssetPermissionsParam",
		"setAssetPermissionsReturn" => "setAssetPermissionsReturn",
		"removeAssetPermissionsParam" => "removeAssetPermissionsParam",
		"removeAssetPermissionsReturn" => "removeAssetPermissionsReturn",
		"getActiveJobsParam" => "getActiveJobsParam",
		"getActiveJobsReturn" => "getActiveJobsReturn",
		"getScheduledJobsParam" => "getScheduledJobsParam",
		"getScheduledJobsReturn" => "getScheduledJobsReturn",
		"getJobLogsParam" => "getJobLogsParam",
		"getJobLogsReturn" => "getJobLogsReturn",
		"getJobLogDetailsParam" => "getJobLogDetailsParam",
		"getJobLogDetailsReturn" => "getJobLogDetailsReturn",
		"submitJobParam" => "submitJobParam",
		"submitJobReturn" => "submitJobReturn",
		"stopJobParam" => "stopJobParam",
		"stopJobReturn" => "stopJobReturn",
		"pauseJobParam" => "pauseJobParam",
		"pauseJobReturn" => "pauseJobReturn",
		"resumeJobParam" => "resumeJobParam",
		"resumeJobReturn" => "resumeJobReturn",
		"executeJobParam" => "executeJobParam",
		"executeJobReturn" => "executeJobReturn",
		"deleteJobParam" => "deleteJobParam",
		"deleteJobReturn" => "deleteJobReturn",
		"getPropertyParam" => "getPropertyParam",
		"getPropertyReturn" => "getPropertyReturn",
		"ipsApiFault" => "ipsApiFault",
		"authenticationFault" => "authenticationFault",
		"authorizationFault" => "authorizationFault",
		"authHeader" => "authHeader",
	);

	/**
	 * Constructor using wsdl location and options array
	 * @param string $wsdl WSDL location for this service
	 * @param array $options Options for the SoapClient
	 */
	public function __construct($wsdl="http://s7ips1.scene7.com/scene7/webservice/IpsApi.wsdl", $options=array()) {
		foreach(self::$classmap as $wsdlClassName => $phpClassName) {
		    if(!isset($options['classmap'][$wsdlClassName])) {
		        $options['classmap'][$wsdlClassName] = $phpClassName;
		    }
		}
		parent::__construct($wsdl, $options);
	}

	/**
	 * Checks if an argument list matches against a valid argument type list
	 * @param array $arguments The argument list to check
	 * @param array $validParameters A list of valid argument types
	 * @return boolean true if arguments match against validParameters
	 * @throws Exception invalid function signature message
	 */
	public function _checkArguments($arguments, $validParameters) {
		$variables = "";
		foreach ($arguments as $arg) {
		    $type = gettype($arg);
		    if ($type == "object") {
		        $type = get_class($arg);
		    }
		    $variables .= "(".$type.")";
		}
		if (!in_array($variables, $validParameters)) {
		    throw new Exception("Invalid parameter types: ".str_replace(")(", ", ", $variables));
		}
		return true;
	}

	/**
	 * Service Call: searchAssets
	 * Parameter options:
	 * (searchAssetsParam) input
	 * (searchAssetsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return searchAssetsReturn
	 * @throws Exception invalid function signature message
	 */
	public function searchAssets($mixed = null) {
		$validParameters = array(
			"(searchAssetsParam)",
			"(searchAssetsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("searchAssets", $args);
	}


	/**
	 * Service Call: getAssets
	 * Parameter options:
	 * (getAssetsParam) input
	 * (getAssetsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getAssetsReturn
	 * @throws Exception invalid function signature message
	 */
	public function getAssets($mixed = null) {
		$validParameters = array(
			"(getAssetsParam)",
			"(getAssetsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getAssets", $args);
	}


	/**
	 * Service Call: moveAsset
	 * Parameter options:
	 * (moveAssetParam) input
	 * (moveAssetParam) input
	 * @param mixed,... See function description for parameter options
	 * @return moveAssetReturn
	 * @throws Exception invalid function signature message
	 */
	public function moveAsset($mixed = null) {
		$validParameters = array(
			"(moveAssetParam)",
			"(moveAssetParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("moveAsset", $args);
	}


	/**
	 * Service Call: renameAsset
	 * Parameter options:
	 * (renameAssetParam) input
	 * (renameAssetParam) input
	 * @param mixed,... See function description for parameter options
	 * @return renameAssetReturn
	 * @throws Exception invalid function signature message
	 */
	public function renameAsset($mixed = null) {
		$validParameters = array(
			"(renameAssetParam)",
			"(renameAssetParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("renameAsset", $args);
	}


	/**
	 * Service Call: deleteAsset
	 * Parameter options:
	 * (deleteAssetParam) input
	 * (deleteAssetParam) input
	 * @param mixed,... See function description for parameter options
	 * @return deleteAssetReturn
	 * @throws Exception invalid function signature message
	 */
	public function deleteAsset($mixed = null) {
		$validParameters = array(
			"(deleteAssetParam)",
			"(deleteAssetParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("deleteAsset", $args);
	}


	/**
	 * Service Call: setAssetPublishState
	 * Parameter options:
	 * (setAssetPublishStateParam) input
	 * (setAssetPublishStateParam) input
	 * @param mixed,... See function description for parameter options
	 * @return setAssetPublishStateReturn
	 * @throws Exception invalid function signature message
	 */
	public function setAssetPublishState($mixed = null) {
		$validParameters = array(
			"(setAssetPublishStateParam)",
			"(setAssetPublishStateParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("setAssetPublishState", $args);
	}


	/**
	 * Service Call: getOriginalFilePaths
	 * Parameter options:
	 * (getOriginalFilePathsParam) input
	 * (getOriginalFilePathsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getOriginalFilePathsReturn
	 * @throws Exception invalid function signature message
	 */
	public function getOriginalFilePaths($mixed = null) {
		$validParameters = array(
			"(getOriginalFilePathsParam)",
			"(getOriginalFilePathsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getOriginalFilePaths", $args);
	}


	/**
	 * Service Call: saveZoomTarget
	 * Parameter options:
	 * (saveZoomTargetParam) input
	 * (saveZoomTargetParam) input
	 * @param mixed,... See function description for parameter options
	 * @return saveZoomTargetReturn
	 * @throws Exception invalid function signature message
	 */
	public function saveZoomTarget($mixed = null) {
		$validParameters = array(
			"(saveZoomTargetParam)",
			"(saveZoomTargetParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("saveZoomTarget", $args);
	}


	/**
	 * Service Call: deleteZoomTarget
	 * Parameter options:
	 * (deleteZoomTargetParam) input
	 * (deleteZoomTargetParam) input
	 * @param mixed,... See function description for parameter options
	 * @return deleteZoomTargetReturn
	 * @throws Exception invalid function signature message
	 */
	public function deleteZoomTarget($mixed = null) {
		$validParameters = array(
			"(deleteZoomTargetParam)",
			"(deleteZoomTargetParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("deleteZoomTarget", $args);
	}


	/**
	 * Service Call: saveImageMap
	 * Parameter options:
	 * (saveImageMapParam) input
	 * (saveImageMapParam) input
	 * @param mixed,... See function description for parameter options
	 * @return saveImageMapReturn
	 * @throws Exception invalid function signature message
	 */
	public function saveImageMap($mixed = null) {
		$validParameters = array(
			"(saveImageMapParam)",
			"(saveImageMapParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("saveImageMap", $args);
	}


	/**
	 * Service Call: deleteImageMap
	 * Parameter options:
	 * (deleteImageMapParam) input
	 * (deleteImageMapParam) input
	 * @param mixed,... See function description for parameter options
	 * @return deleteImageMapReturn
	 * @throws Exception invalid function signature message
	 */
	public function deleteImageMap($mixed = null) {
		$validParameters = array(
			"(deleteImageMapParam)",
			"(deleteImageMapParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("deleteImageMap", $args);
	}


	/**
	 * Service Call: createImageSet
	 * Parameter options:
	 * (createImageSetParam) input
	 * (createImageSetParam) input
	 * @param mixed,... See function description for parameter options
	 * @return createImageSetReturn
	 * @throws Exception invalid function signature message
	 */
	public function createImageSet($mixed = null) {
		$validParameters = array(
			"(createImageSetParam)",
			"(createImageSetParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("createImageSet", $args);
	}


	/**
	 * Service Call: setImageSetMembers
	 * Parameter options:
	 * (setImageSetMembersParam) input
	 * (setImageSetMembersParam) input
	 * @param mixed,... See function description for parameter options
	 * @return setImageSetMembersReturn
	 * @throws Exception invalid function signature message
	 */
	public function setImageSetMembers($mixed = null) {
		$validParameters = array(
			"(setImageSetMembersParam)",
			"(setImageSetMembersParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("setImageSetMembers", $args);
	}


	/**
	 * Service Call: getImageSetMembers
	 * Parameter options:
	 * (getImageSetMembersParam) input
	 * (getImageSetMembersParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getImageSetMembersReturn
	 * @throws Exception invalid function signature message
	 */
	public function getImageSetMembers($mixed = null) {
		$validParameters = array(
			"(getImageSetMembersParam)",
			"(getImageSetMembersParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getImageSetMembers", $args);
	}


	/**
	 * Service Call: getAllCompanies
	 * Parameter options:
	 * (getAllCompaniesParam) input
	 * (getAllCompaniesParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getAllCompaniesReturn
	 * @throws Exception invalid function signature message
	 */
	public function getAllCompanies($mixed = null) {
		$validParameters = array(
			"(getAllCompaniesParam)",
			"(getAllCompaniesParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getAllCompanies", $args);
	}


	/**
	 * Service Call: addCompany
	 * Parameter options:
	 * (addCompanyParam) input
	 * (addCompanyParam) input
	 * @param mixed,... See function description for parameter options
	 * @return addCompanyReturn
	 * @throws Exception invalid function signature message
	 */
	public function addCompany($mixed = null) {
		$validParameters = array(
			"(addCompanyParam)",
			"(addCompanyParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("addCompany", $args);
	}


	/**
	 * Service Call: getCompanyMembers
	 * Parameter options:
	 * (getCompanyMembersParam) input
	 * (getCompanyMembersParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getCompanyMembersReturn
	 * @throws Exception invalid function signature message
	 */
	public function getCompanyMembers($mixed = null) {
		$validParameters = array(
			"(getCompanyMembersParam)",
			"(getCompanyMembersParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getCompanyMembers", $args);
	}


	/**
	 * Service Call: addUser
	 * Parameter options:
	 * (addUserParam) input
	 * (addUserParam) input
	 * @param mixed,... See function description for parameter options
	 * @return addUserReturn
	 * @throws Exception invalid function signature message
	 */
	public function addUser($mixed = null) {
		$validParameters = array(
			"(addUserParam)",
			"(addUserParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("addUser", $args);
	}


	/**
	 * Service Call: generatePassword
	 * Parameter options:
	 * (generatePasswordParam) input
	 * (generatePasswordParam) input
	 * @param mixed,... See function description for parameter options
	 * @return generatePasswordReturn
	 * @throws Exception invalid function signature message
	 */
	public function generatePassword($mixed = null) {
		$validParameters = array(
			"(generatePasswordParam)",
			"(generatePasswordParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("generatePassword", $args);
	}


	/**
	 * Service Call: setPassword
	 * Parameter options:
	 * (setPasswordParam) input
	 * (setPasswordParam) input
	 * @param mixed,... See function description for parameter options
	 * @return setPasswordReturn
	 * @throws Exception invalid function signature message
	 */
	public function setPassword($mixed = null) {
		$validParameters = array(
			"(setPasswordParam)",
			"(setPasswordParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("setPassword", $args);
	}


	/**
	 * Service Call: setUserInfo
	 * Parameter options:
	 * (setUserInfoParam) input
	 * (setUserInfoParam) input
	 * @param mixed,... See function description for parameter options
	 * @return setUserInfoReturn
	 * @throws Exception invalid function signature message
	 */
	public function setUserInfo($mixed = null) {
		$validParameters = array(
			"(setUserInfoParam)",
			"(setUserInfoParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("setUserInfo", $args);
	}


	/**
	 * Service Call: getUserInfo
	 * Parameter options:
	 * (getUserInfoParam) input
	 * (getUserInfoParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getUserInfoReturn
	 * @throws Exception invalid function signature message
	 */
	public function getUserInfo($mixed = null) {
		$validParameters = array(
			"(getUserInfoParam)",
			"(getUserInfoParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getUserInfo", $args);
	}


	/**
	 * Service Call: getAllUsers
	 * Parameter options:
	 * (getAllUsersParam) input
	 * (getAllUsersParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getAllUsersReturn
	 * @throws Exception invalid function signature message
	 */
	public function getAllUsers($mixed = null) {
		$validParameters = array(
			"(getAllUsersParam)",
			"(getAllUsersParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getAllUsers", $args);
	}


	/**
	 * Service Call: getUsers
	 * Parameter options:
	 * (getUsersParam) input
	 * (getUsersParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getUsersReturn
	 * @throws Exception invalid function signature message
	 */
	public function getUsers($mixed = null) {
		$validParameters = array(
			"(getUsersParam)",
			"(getUsersParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getUsers", $args);
	}


	/**
	 * Service Call: getUserChars
	 * Parameter options:
	 * (getUserCharsParam) input
	 * (getUserCharsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getUserCharsReturn
	 * @throws Exception invalid function signature message
	 */
	public function getUserChars($mixed = null) {
		$validParameters = array(
			"(getUserCharsParam)",
			"(getUserCharsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getUserChars", $args);
	}


	/**
	 * Service Call: setCompanyMembership
	 * Parameter options:
	 * (setCompanyMembershipParam) input
	 * (setCompanyMembershipParam) input
	 * @param mixed,... See function description for parameter options
	 * @return setCompanyMembershipReturn
	 * @throws Exception invalid function signature message
	 */
	public function setCompanyMembership($mixed = null) {
		$validParameters = array(
			"(setCompanyMembershipParam)",
			"(setCompanyMembershipParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("setCompanyMembership", $args);
	}


	/**
	 * Service Call: addCompanyMembership
	 * Parameter options:
	 * (addCompanyMembershipParam) input
	 * (addCompanyMembershipParam) input
	 * @param mixed,... See function description for parameter options
	 * @return addCompanyMembershipReturn
	 * @throws Exception invalid function signature message
	 */
	public function addCompanyMembership($mixed = null) {
		$validParameters = array(
			"(addCompanyMembershipParam)",
			"(addCompanyMembershipParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("addCompanyMembership", $args);
	}


	/**
	 * Service Call: removeCompanyMembership
	 * Parameter options:
	 * (removeCompanyMembershipParam) input
	 * (removeCompanyMembershipParam) input
	 * @param mixed,... See function description for parameter options
	 * @return removeCompanyMembershipReturn
	 * @throws Exception invalid function signature message
	 */
	public function removeCompanyMembership($mixed = null) {
		$validParameters = array(
			"(removeCompanyMembershipParam)",
			"(removeCompanyMembershipParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("removeCompanyMembership", $args);
	}


	/**
	 * Service Call: getCompanyMembership
	 * Parameter options:
	 * (getCompanyMembershipParam) input
	 * (getCompanyMembershipParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getCompanyMembershipReturn
	 * @throws Exception invalid function signature message
	 */
	public function getCompanyMembership($mixed = null) {
		$validParameters = array(
			"(getCompanyMembershipParam)",
			"(getCompanyMembershipParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getCompanyMembership", $args);
	}


	/**
	 * Service Call: checkLogin
	 * Parameter options:
	 * (checkLoginParam) input
	 * (checkLoginParam) input
	 * @param mixed,... See function description for parameter options
	 * @return checkLoginReturn
	 * @throws Exception invalid function signature message
	 */
	public function checkLogin($mixed = null) {
		$validParameters = array(
			"(checkLoginParam)",
			"(checkLoginParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("checkLogin", $args);
	}


	/**
	 * Service Call: getCompanyInfo
	 * Parameter options:
	 * (getCompanyInfoParam) input
	 * (getCompanyInfoParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getCompanyInfoReturn
	 * @throws Exception invalid function signature message
	 */
	public function getCompanyInfo($mixed = null) {
		$validParameters = array(
			"(getCompanyInfoParam)",
			"(getCompanyInfoParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getCompanyInfo", $args);
	}


	/**
	 * Service Call: getImageFormats
	 * Parameter options:
	 * (getImageFormatsParam) input
	 * (getImageFormatsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getImageFormatsReturn
	 * @throws Exception invalid function signature message
	 */
	public function getImageFormats($mixed = null) {
		$validParameters = array(
			"(getImageFormatsParam)",
			"(getImageFormatsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getImageFormats", $args);
	}


	/**
	 * Service Call: saveImageFormat
	 * Parameter options:
	 * (saveImageFormatParam) input
	 * (saveImageFormatParam) input
	 * @param mixed,... See function description for parameter options
	 * @return saveImageFormatReturn
	 * @throws Exception invalid function signature message
	 */
	public function saveImageFormat($mixed = null) {
		$validParameters = array(
			"(saveImageFormatParam)",
			"(saveImageFormatParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("saveImageFormat", $args);
	}


	/**
	 * Service Call: deleteImageFormat
	 * Parameter options:
	 * (deleteImageFormatParam) input
	 * (deleteImageFormatParam) input
	 * @param mixed,... See function description for parameter options
	 * @return deleteImageFormatReturn
	 * @throws Exception invalid function signature message
	 */
	public function deleteImageFormat($mixed = null) {
		$validParameters = array(
			"(deleteImageFormatParam)",
			"(deleteImageFormatParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("deleteImageFormat", $args);
	}


	/**
	 * Service Call: getGroups
	 * Parameter options:
	 * (getGroupsParam) input
	 * (getGroupsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getGroupsReturn
	 * @throws Exception invalid function signature message
	 */
	public function getGroups($mixed = null) {
		$validParameters = array(
			"(getGroupsParam)",
			"(getGroupsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getGroups", $args);
	}


	/**
	 * Service Call: saveGroup
	 * Parameter options:
	 * (saveGroupParam) input
	 * (saveGroupParam) input
	 * @param mixed,... See function description for parameter options
	 * @return saveGroupReturn
	 * @throws Exception invalid function signature message
	 */
	public function saveGroup($mixed = null) {
		$validParameters = array(
			"(saveGroupParam)",
			"(saveGroupParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("saveGroup", $args);
	}


	/**
	 * Service Call: deleteGroup
	 * Parameter options:
	 * (deleteGroupParam) input
	 * (deleteGroupParam) input
	 * @param mixed,... See function description for parameter options
	 * @return deleteGroupReturn
	 * @throws Exception invalid function signature message
	 */
	public function deleteGroup($mixed = null) {
		$validParameters = array(
			"(deleteGroupParam)",
			"(deleteGroupParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("deleteGroup", $args);
	}


	/**
	 * Service Call: getGroupMembership
	 * Parameter options:
	 * (getGroupMembershipParam) input
	 * (getGroupMembershipParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getGroupMembershipReturn
	 * @throws Exception invalid function signature message
	 */
	public function getGroupMembership($mixed = null) {
		$validParameters = array(
			"(getGroupMembershipParam)",
			"(getGroupMembershipParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getGroupMembership", $args);
	}


	/**
	 * Service Call: setGroupMembership
	 * Parameter options:
	 * (setGroupMembershipParam) input
	 * (setGroupMembershipParam) input
	 * @param mixed,... See function description for parameter options
	 * @return setGroupMembershipReturn
	 * @throws Exception invalid function signature message
	 */
	public function setGroupMembership($mixed = null) {
		$validParameters = array(
			"(setGroupMembershipParam)",
			"(setGroupMembershipParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("setGroupMembership", $args);
	}


	/**
	 * Service Call: addGroupMembership
	 * Parameter options:
	 * (addGroupMembershipParam) input
	 * (addGroupMembershipParam) input
	 * @param mixed,... See function description for parameter options
	 * @return addGroupMembershipReturn
	 * @throws Exception invalid function signature message
	 */
	public function addGroupMembership($mixed = null) {
		$validParameters = array(
			"(addGroupMembershipParam)",
			"(addGroupMembershipParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("addGroupMembership", $args);
	}


	/**
	 * Service Call: removeGroupMembership
	 * Parameter options:
	 * (removeGroupMembershipParam) input
	 * (removeGroupMembershipParam) input
	 * @param mixed,... See function description for parameter options
	 * @return removeGroupMembershipReturn
	 * @throws Exception invalid function signature message
	 */
	public function removeGroupMembership($mixed = null) {
		$validParameters = array(
			"(removeGroupMembershipParam)",
			"(removeGroupMembershipParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("removeGroupMembership", $args);
	}


	/**
	 * Service Call: getGroupMembers
	 * Parameter options:
	 * (getGroupMembersParam) input
	 * (getGroupMembersParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getGroupMembersReturn
	 * @throws Exception invalid function signature message
	 */
	public function getGroupMembers($mixed = null) {
		$validParameters = array(
			"(getGroupMembersParam)",
			"(getGroupMembersParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getGroupMembers", $args);
	}


	/**
	 * Service Call: setGroupMembers
	 * Parameter options:
	 * (setGroupMembersParam) input
	 * (setGroupMembersParam) input
	 * @param mixed,... See function description for parameter options
	 * @return setGroupMembersReturn
	 * @throws Exception invalid function signature message
	 */
	public function setGroupMembers($mixed = null) {
		$validParameters = array(
			"(setGroupMembersParam)",
			"(setGroupMembersParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("setGroupMembers", $args);
	}


	/**
	 * Service Call: addGroupMembers
	 * Parameter options:
	 * (addGroupMembersParam) input
	 * (addGroupMembersParam) input
	 * @param mixed,... See function description for parameter options
	 * @return addGroupMembersReturn
	 * @throws Exception invalid function signature message
	 */
	public function addGroupMembers($mixed = null) {
		$validParameters = array(
			"(addGroupMembersParam)",
			"(addGroupMembersParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("addGroupMembers", $args);
	}


	/**
	 * Service Call: removeGroupMembers
	 * Parameter options:
	 * (removeGroupMembersParam) input
	 * (removeGroupMembersParam) input
	 * @param mixed,... See function description for parameter options
	 * @return removeGroupMembersReturn
	 * @throws Exception invalid function signature message
	 */
	public function removeGroupMembers($mixed = null) {
		$validParameters = array(
			"(removeGroupMembersParam)",
			"(removeGroupMembersParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("removeGroupMembers", $args);
	}


	/**
	 * Service Call: getFolders
	 * Parameter options:
	 * (getFoldersParam) input
	 * (getFoldersParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getFoldersReturn
	 * @throws Exception invalid function signature message
	 */
	public function getFolders($mixed = null) {
		$validParameters = array(
			"(getFoldersParam)",
			"(getFoldersParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getFolders", $args);
	}


	/**
	 * Service Call: getFolderTree
	 * Parameter options:
	 * (getFolderTreeParam) input
	 * (getFolderTreeParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getFolderTreeReturn
	 * @throws Exception invalid function signature message
	 */
	public function getFolderTree($mixed = null) {
		$validParameters = array(
			"(getFolderTreeParam)",
			"(getFolderTreeParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getFolderTree", $args);
	}


	/**
	 * Service Call: createFolder
	 * Parameter options:
	 * (createFolderParam) input
	 * (createFolderParam) input
	 * @param mixed,... See function description for parameter options
	 * @return createFolderReturn
	 * @throws Exception invalid function signature message
	 */
	public function createFolder($mixed = null) {
		$validParameters = array(
			"(createFolderParam)",
			"(createFolderParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("createFolder", $args);
	}


	/**
	 * Service Call: renameFolder
	 * Parameter options:
	 * (renameFolderParam) input
	 * (renameFolderParam) input
	 * @param mixed,... See function description for parameter options
	 * @return renameFolderReturn
	 * @throws Exception invalid function signature message
	 */
	public function renameFolder($mixed = null) {
		$validParameters = array(
			"(renameFolderParam)",
			"(renameFolderParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("renameFolder", $args);
	}


	/**
	 * Service Call: deleteFolder
	 * Parameter options:
	 * (deleteFolderParam) input
	 * (deleteFolderParam) input
	 * @param mixed,... See function description for parameter options
	 * @return deleteFolderReturn
	 * @throws Exception invalid function signature message
	 */
	public function deleteFolder($mixed = null) {
		$validParameters = array(
			"(deleteFolderParam)",
			"(deleteFolderParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("deleteFolder", $args);
	}


	/**
	 * Service Call: getProjects
	 * Parameter options:
	 * (getProjectsParam) input
	 * (getProjectsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getProjectsReturn
	 * @throws Exception invalid function signature message
	 */
	public function getProjects($mixed = null) {
		$validParameters = array(
			"(getProjectsParam)",
			"(getProjectsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getProjects", $args);
	}


	/**
	 * Service Call: getDiskUsage
	 * Parameter options:
	 * (getDiskUsageParam) input
	 * (getDiskUsageParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getDiskUsageReturn
	 * @throws Exception invalid function signature message
	 */
	public function getDiskUsage($mixed = null) {
		$validParameters = array(
			"(getDiskUsageParam)",
			"(getDiskUsageParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getDiskUsage", $args);
	}


	/**
	 * Service Call: getMetadataFields
	 * Parameter options:
	 * (getMetadataFieldsParam) input
	 * (getMetadataFieldsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getMetadataFieldsReturn
	 * @throws Exception invalid function signature message
	 */
	public function getMetadataFields($mixed = null) {
		$validParameters = array(
			"(getMetadataFieldsParam)",
			"(getMetadataFieldsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getMetadataFields", $args);
	}


	/**
	 * Service Call: saveMetadataField
	 * Parameter options:
	 * (saveMetadataFieldParam) input
	 * (saveMetadataFieldParam) input
	 * @param mixed,... See function description for parameter options
	 * @return saveMetadataFieldReturn
	 * @throws Exception invalid function signature message
	 */
	public function saveMetadataField($mixed = null) {
		$validParameters = array(
			"(saveMetadataFieldParam)",
			"(saveMetadataFieldParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("saveMetadataField", $args);
	}


	/**
	 * Service Call: setAssetMetadata
	 * Parameter options:
	 * (setAssetMetadataParam) input
	 * (setAssetMetadataParam) input
	 * @param mixed,... See function description for parameter options
	 * @return setAssetMetadataReturn
	 * @throws Exception invalid function signature message
	 */
	public function setAssetMetadata($mixed = null) {
		$validParameters = array(
			"(setAssetMetadataParam)",
			"(setAssetMetadataParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("setAssetMetadata", $args);
	}


	/**
	 * Service Call: getUniqueMetadataValues
	 * Parameter options:
	 * (getUniqueMetadataValuesParam) input
	 * (getUniqueMetadataValuesParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getUniqueMetadataValuesReturn
	 * @throws Exception invalid function signature message
	 */
	public function getUniqueMetadataValues($mixed = null) {
		$validParameters = array(
			"(getUniqueMetadataValuesParam)",
			"(getUniqueMetadataValuesParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getUniqueMetadataValues", $args);
	}


	/**
	 * Service Call: updateFolderPermissions
	 * Parameter options:
	 * (updateFolderPermissionsParam) input
	 * (updateFolderPermissionsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return updateFolderPermissionsReturn
	 * @throws Exception invalid function signature message
	 */
	public function updateFolderPermissions($mixed = null) {
		$validParameters = array(
			"(updateFolderPermissionsParam)",
			"(updateFolderPermissionsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("updateFolderPermissions", $args);
	}


	/**
	 * Service Call: setFolderPermissions
	 * Parameter options:
	 * (setFolderPermissionsParam) input
	 * (setFolderPermissionsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return setFolderPermissionsReturn
	 * @throws Exception invalid function signature message
	 */
	public function setFolderPermissions($mixed = null) {
		$validParameters = array(
			"(setFolderPermissionsParam)",
			"(setFolderPermissionsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("setFolderPermissions", $args);
	}


	/**
	 * Service Call: removeFolderPermissions
	 * Parameter options:
	 * (removeFolderPermissionsParam) input
	 * (removeFolderPermissionsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return removeFolderPermissionsReturn
	 * @throws Exception invalid function signature message
	 */
	public function removeFolderPermissions($mixed = null) {
		$validParameters = array(
			"(removeFolderPermissionsParam)",
			"(removeFolderPermissionsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("removeFolderPermissions", $args);
	}


	/**
	 * Service Call: updateAssetPermissions
	 * Parameter options:
	 * (updateAssetPermissionsParam) input
	 * (updateAssetPermissionsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return updateAssetPermissionsReturn
	 * @throws Exception invalid function signature message
	 */
	public function updateAssetPermissions($mixed = null) {
		$validParameters = array(
			"(updateAssetPermissionsParam)",
			"(updateAssetPermissionsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("updateAssetPermissions", $args);
	}


	/**
	 * Service Call: setAssetPermissions
	 * Parameter options:
	 * (setAssetPermissionsParam) input
	 * (setAssetPermissionsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return setAssetPermissionsReturn
	 * @throws Exception invalid function signature message
	 */
	public function setAssetPermissions($mixed = null) {
		$validParameters = array(
			"(setAssetPermissionsParam)",
			"(setAssetPermissionsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("setAssetPermissions", $args);
	}


	/**
	 * Service Call: removeAssetPermissions
	 * Parameter options:
	 * (removeAssetPermissionsParam) input
	 * (removeAssetPermissionsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return removeAssetPermissionsReturn
	 * @throws Exception invalid function signature message
	 */
	public function removeAssetPermissions($mixed = null) {
		$validParameters = array(
			"(removeAssetPermissionsParam)",
			"(removeAssetPermissionsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("removeAssetPermissions", $args);
	}


	/**
	 * Service Call: getActiveJobs
	 * Parameter options:
	 * (getActiveJobsParam) input
	 * (getActiveJobsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getActiveJobsReturn
	 * @throws Exception invalid function signature message
	 */
	public function getActiveJobs($mixed = null) {
		$validParameters = array(
			"(getActiveJobsParam)",
			"(getActiveJobsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getActiveJobs", $args);
	}


	/**
	 * Service Call: getScheduledJobs
	 * Parameter options:
	 * (getScheduledJobsParam) input
	 * (getScheduledJobsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getScheduledJobsReturn
	 * @throws Exception invalid function signature message
	 */
	public function getScheduledJobs($mixed = null) {
		$validParameters = array(
			"(getScheduledJobsParam)",
			"(getScheduledJobsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getScheduledJobs", $args);
	}


	/**
	 * Service Call: getJobLogs
	 * Parameter options:
	 * (getJobLogsParam) input
	 * (getJobLogsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getJobLogsReturn
	 * @throws Exception invalid function signature message
	 */
	public function getJobLogs($mixed = null) {
		$validParameters = array(
			"(getJobLogsParam)",
			"(getJobLogsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getJobLogs", $args);
	}


	/**
	 * Service Call: getJobLogDetails
	 * Parameter options:
	 * (getJobLogDetailsParam) input
	 * (getJobLogDetailsParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getJobLogDetailsReturn
	 * @throws Exception invalid function signature message
	 */
	public function getJobLogDetails($mixed = null) {
		$validParameters = array(
			"(getJobLogDetailsParam)",
			"(getJobLogDetailsParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getJobLogDetails", $args);
	}


	/**
	 * Service Call: submitJob
	 * Parameter options:
	 * (submitJobParam) input
	 * (submitJobParam) input
	 * @param mixed,... See function description for parameter options
	 * @return submitJobReturn
	 * @throws Exception invalid function signature message
	 */
	public function submitJob($mixed = null) {
		$validParameters = array(
			"(submitJobParam)",
			"(submitJobParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("submitJob", $args);
	}


	/**
	 * Service Call: stopJob
	 * Parameter options:
	 * (stopJobParam) input
	 * (stopJobParam) input
	 * @param mixed,... See function description for parameter options
	 * @return stopJobReturn
	 * @throws Exception invalid function signature message
	 */
	public function stopJob($mixed = null) {
		$validParameters = array(
			"(stopJobParam)",
			"(stopJobParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("stopJob", $args);
	}


	/**
	 * Service Call: pauseJob
	 * Parameter options:
	 * (pauseJobParam) input
	 * (pauseJobParam) input
	 * @param mixed,... See function description for parameter options
	 * @return pauseJobReturn
	 * @throws Exception invalid function signature message
	 */
	public function pauseJob($mixed = null) {
		$validParameters = array(
			"(pauseJobParam)",
			"(pauseJobParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("pauseJob", $args);
	}


	/**
	 * Service Call: resumeJob
	 * Parameter options:
	 * (resumeJobParam) input
	 * (resumeJobParam) input
	 * @param mixed,... See function description for parameter options
	 * @return resumeJobReturn
	 * @throws Exception invalid function signature message
	 */
	public function resumeJob($mixed = null) {
		$validParameters = array(
			"(resumeJobParam)",
			"(resumeJobParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("resumeJob", $args);
	}


	/**
	 * Service Call: executeJob
	 * Parameter options:
	 * (executeJobParam) input
	 * (executeJobParam) input
	 * @param mixed,... See function description for parameter options
	 * @return executeJobReturn
	 * @throws Exception invalid function signature message
	 */
	public function executeJob($mixed = null) {
		$validParameters = array(
			"(executeJobParam)",
			"(executeJobParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("executeJob", $args);
	}


	/**
	 * Service Call: deleteJob
	 * Parameter options:
	 * (deleteJobParam) input
	 * (deleteJobParam) input
	 * @param mixed,... See function description for parameter options
	 * @return deleteJobReturn
	 * @throws Exception invalid function signature message
	 */
	public function deleteJob($mixed = null) {
		$validParameters = array(
			"(deleteJobParam)",
			"(deleteJobParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("deleteJob", $args);
	}


	/**
	 * Service Call: getProperty
	 * Parameter options:
	 * (getPropertyParam) input
	 * (getPropertyParam) input
	 * @param mixed,... See function description for parameter options
	 * @return getPropertyReturn
	 * @throws Exception invalid function signature message
	 */
	public function getProperty($mixed = null) {
		$validParameters = array(
			"(getPropertyParam)",
			"(getPropertyParam)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getProperty", $args);
	}


}