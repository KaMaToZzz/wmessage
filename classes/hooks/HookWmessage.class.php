<?php
/*-------------------------------------------------------
*
*   Plugin "Wmessage"
*   Author: Vladimir Rybalko (kamatozzz)
*   Site: http://job.livestreetcms.com/profile/KaMaToZzz/
	skype: kammatozzz
*   Contact e-mail: kamatozzz1@gmail.com
*
---------------------------------------------------------
*/
class PluginWmessage_HookWmessage extends Hook {

    public function RegisterHook() {
	     $this->AddHook('template_wmessage', 'InjectWmessage');
    }
		
	public function InjectWmessage() {
		if (!in_array(Router::GetAction(), Config::Get('plugin.wmessage.wpage'))) {
		return false;
		}
		$oUserCurrent = $this->User_GetUserCurrent();
			switch(Config::Get('plugin.wmessage.show_type')) {
			  case 'registered':
				if ($oUserCurrent) {
				  return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'registered.tpl');
				}
				break;
			  case 'guest':
				if (!$oUserCurrent) {
				  return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'guest.tpl');
				}
				break;
			  default:
				return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'all.tpl');
			}
	}
}
?>
