<?php

class PluginEditdatefix_ModuleEditdatefix extends Module {
	protected $oMapper;
		
	public function Init() {		
		$this->oMapper=Engine::GetMapper(__CLASS__);
	}
	
	public function SetNewEditDateByTopicId($iTopicId){
		return $this->oMapper->SetNewEditDateByTopicId($iTopicId);
	}

}
?>