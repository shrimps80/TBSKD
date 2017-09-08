<?php
/**
 * TOP API: taobao.tbk.content.get request
 * 
 * @author auto create
 * @since 1.0, 2017.08.31
 */
class TbkContentGetRequest
{
	/** 
	 * 推广位
	 **/
	private $adzoneId;
	
	/** 
	 * 表示取这个时间点以前的数据，以毫秒为单位
	 **/
	private $beforeTimestamp;
	
	/** 
	 * 类目
	 **/
	private $cid;
	
	/** 
	 * 表示期望获取条数
	 **/
	private $count;
	
	/** 
	 * 内容类型，1:图文、2: 图集、3: 短视频
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setAdzoneId($adzoneId)
	{
		$this->adzoneId = $adzoneId;
		$this->apiParas["adzone_id"] = $adzoneId;
	}

	public function getAdzoneId()
	{
		return $this->adzoneId;
	}

	public function setBeforeTimestamp($beforeTimestamp)
	{
		$this->beforeTimestamp = $beforeTimestamp;
		$this->apiParas["before_timestamp"] = $beforeTimestamp;
	}

	public function getBeforeTimestamp()
	{
		return $this->beforeTimestamp;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setCount($count)
	{
		$this->count = $count;
		$this->apiParas["count"] = $count;
	}

	public function getCount()
	{
		return $this->count;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.content.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
