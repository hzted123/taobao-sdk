<?php
namespace hzted123\taobaosdk\dingtalk\domain;
/**
 * result
 * @author auto create
 */
class AsyncSendResult
{
	
	/** 
	 * 发送失败的用户id
	 **/
	public $failed_user_id_list;
	
	/** 
	 * 被禁止发送消息的用户id
	 **/
	public $forbidden_user_id_list;
	
	/** 
	 * 无效的部门id
	 **/
	public $invalid_dept_id_list;
	
	/** 
	 * 无效的用户id
	 **/
	public $invalid_user_id_list;
	
	/** 
	 * 已读消息的用户id
	 **/
	public $read_user_id_list;
	
	/** 
	 * 未读消息的用户id
	 **/
	public $unread_user_id_list;	
}
?>
