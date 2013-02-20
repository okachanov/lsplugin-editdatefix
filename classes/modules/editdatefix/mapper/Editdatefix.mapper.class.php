<?php

class PluginEditdatefix_ModuleEditdatefix_MapperEditdatefix extends Mapper {

	public function SetNewEditDateByTopicId($iTopicId){
		$sDate			= date("Y-m-d H:i:s");
		$sTopicTable	= Config::Get('db.table.topic');
		
		return $this->oDb->query("UPDATE ".$sTopicTable." SET topic_date_edit = ? WHERE topic_id = ?d",$sDate,$iTopicId);
	}
	
}
?>