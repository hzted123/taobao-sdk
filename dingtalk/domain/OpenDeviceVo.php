<?php
namespace hzted123\taobaosdk\dingtalk\domain;
/**
 * 设备列表
 * @author auto create
 */
class OpenDeviceVo
{
	
	/** 
	 * 设备头像
	 **/
	public $avatar;
	
	/** 
	 * 设备ID
	 **/
	public $device_id;
	
	/** 
	 * 设备类型名称
	 **/
	public $device_type_name;
	
	/** 
	 * 设备昵称
	 **/
	public $nick;
	
	/** 
	 * 设备在线状态{1:在线，0:不在线}
	 **/
	public $on_line_status;	
}
?>
