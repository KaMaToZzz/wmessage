<?php

class PluginWmessage_HookWmessage extends Hook {

    public function RegisterHook() {
	     $this->AddHook('template_wmessage', 'InjectWmessage');
    }
	
	public function InjectWmessage($aParam)
    {
		if (Config::Get('plugin.wmessage.in')){
			return $this->Viewer_Fetch($this->PluginWmessage_Wmessage_GetTemplateFilePath(__CLASS__, 'inject_wmessage.tpl'));
		}
		return false;
    }
}
?>
