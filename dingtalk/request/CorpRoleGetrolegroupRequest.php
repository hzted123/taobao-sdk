<?php
namespace hzted123\taobaosdk\dingtalk\request;
use hzted123\taobaosdk\top\RequestCheckUtil;
/**
 * dingtalk API: dingtalk.corp.role.getrolegroup request
 * 
 * @author auto create
 * @since 1.0, 2017.06.23
 */
class CorpRoleGetrolegroupRequest
{
	/** 
	 * 角色组的Id
	 **/
	private $groupId;
	
	private $apiParas = array();
	
	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.role.getrolegroup";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
